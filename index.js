var WebSocketServer = require("ws").Server
var http = require("http")
var express = require("express")
var app = express()
var port = process.env.PORT || 5000

app.use(express.static(__dirname + '/site'));

// CORS (Cross-Origin Resource Sharing) headers to support Cross-site HTTP requests
app.all('*', function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "X-Requested-With");
    next();
});

 app.get('/test', function(request, response) {
 response.send('Hello World!');
 });

var server = http.createServer(app)
server.listen(port)

console.log("http server listening on %d", port)

var wss = new WebSocketServer({server: server})
console.log("websocket server created")

//connections
var gCon = [];

var curID = 0;

var WsProtocol = 
{
	//operation code 
	wsOP_cliHello:0,
	wsOP_servHello:1,
	wsOP_cliLogin:2,
	wsOP_msgRelay:3,
	wsOP_msgSpecial:4,
	wsOP_positiveAck:5,
	wsOP_negativeAck:6,
	
	//subopCodes
	wsOP_srvDebugConn:0,
	
	
	//message keys
	wsKey_clientType:0,
	
	//message values
	wsValue_homeBase:0,
	wsValue_webBrowser:1,
	wsValue_mobileApp:2,
	wsValue_unknown:3,
	
	//connection states
	wsState_new:0,
	wsState_hello:1,
	wsState_conn:2,
	wsState_inval:3,
	
	
};

wss.on("connection", function(ws) 
{
  var id = curID++;
  var conIdx = gCon.length;
  
  gCon.push({ws:ws, id:-1, ws:ws, state:WsProtocol.wsState_new, type:WsProtocol.wsValue_unknown});
  
  /*setInterval(function() {
    ws.send(JSON.stringify(new Date()), function() {  })
  }, 1000)*/

  //ws.send("{conID:"+id+"}", function() {  })

  console.log("ws open "+id);
   
  ws.on("message", function(msg) 
  {
    console.log("ws msg "+msg)
    
	var m = JSON.parse(msg);
	var reply = {};
	
	if(typeof m.op === 'undefined')
	{
		console.log("[E] ws msg: nop")
		return;
	}
	
	switch(m.op)
	{
		case WsProtocol.wsOP_cliHello:
			if(gCon[conIdx].state == WsProtocol.wsState_new)
			{
				reply.op = WsProtocol.wsOP_servHello;
				ws.send(JSON.stringify(reply), function() {  })

				gCon[conIdx].state = WsProtocol.wsState_hello;
			}
			else console.log("[E] ws msg: cliHello, state "+gCon[conIdx].state);
		break;
		
		case WsProtocol.wsOP_cliLogin:
			if(gCon[conIdx].state == WsProtocol.wsState_hello)
			{
				if((m.type >= WsProtocol.wsValue_homeBase && m.type < WsProtocol.wsValue_unknown) &&
					(m.id > -1))
				{
					gCon[conIdx].type = m.type;
					gCon[conIdx].id = m.id;
					
					reply.op = WsProtocol.wsOP_positiveAck;
					reply.conID = id;
					gCon[conIdx].state = WsProtocol.wsState_conn;
				}
				else
				{
					reply.op = WsProtocol.wsOP_negativeAck;
					reply.err = "badParams";
					
				}
				
				ws.send(JSON.stringify(reply), function() {  })
			}
			else console.log("[E] ws msg: cliLogin, state "+gCon[conIdx].state);		
		break;
		
		case WsProtocol.wsOP_msgRelay:
			if(gCon[conIdx].state == WsProtocol.wsState_conn)
			{
				var dest = m.dest;
				var destType = m.type;
				var i=0;
				reply.op = WsProtocol.wsOP_negativeAck;
				
				for(; i< conIdx+1;i++)
				{
					if(gCon[i].type == destType && gCon[i].id == dest)
					{
						var proxy={}
						proxy.op = WsProtocol.wsOP_msgRelay;
						proxy.msg = m.msg;
						proxy.from = gCon[conIdx].id;
						
						gCon[i].ws.send(JSON.stringify(proxy), function() {  })
						reply.op = WsProtocol.wsOP_positiveAck;
						break;
					}
				}
				
				//only send reply for negative responses
				if(reply.op == WsProtocol.wsOP_negativeAck)
				{
					ws.send(JSON.stringify(reply), function() {  })
				}
			}
			else console.log("[E] ws msg: msgToBase, state "+gCon[conIdx].state);		
		break;
		
		case WsProtocol.wsOP_msgSpecial:
			if(gCon[conIdx].state == WsProtocol.wsState_conn)
			{
				switch(m.subOp)
				{
					case WsProtocol.wsOP_srvDebugConn:
					
						reply.op = WsProtocol.wsOP_msgSpecial;
						reply.subOp = WsProtocol.wsOP_srvDebugConn;
						
						reply.message = gCon;
						
						ws.send(JSON.stringify(reply), function() {  })
	
					break;
					
					default:
						console.log("[E] ws msg: unknown op" + m.op)
					break;
				}
			}
			else console.log("[E] ws msg: msgToServer, state "+gCon[conIdx].state);
		break;
		
		default:
			console.log("[E] ws msg: unknown op" + m.op)
			break;
	};
	
  });

  ws.on("close", function() 
  {
    console.log("ws close "+id)
    //clearInterval(id);
  });
});
