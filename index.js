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
var gCon = {};

var curID = 0;

var WsProtocol = 
{
	//operation code 
	wsOP_cliHello:0,
	wsOP_servHello:1,
	wsOP_cliLogin:2,
	wsOP_msgToBase:3,
	wsOP_msgToUser:4,
	
	//message keys
	wsKey_clientType:0,
	
	//message values
	wsValue_homeBase:0,
	wsValue_webBrowser:1,
	wsValue_mobileApp:2,
	
	//connection states
	wsState_new:0,
	wsState_hello:1,
	wsState_conn:2,
	wsState_inval:3,
	
};

function getConIdx(id)
{
	var i;
	for(i=0; i< gCon.length; i++)
	{
		if(id == gCon[i].id)
		{
			return i;
		}
	}
	return -1;
}


wss.on("connection", function(ws) 
{
  var id = curID++;
  var conIdx = gCon.length;
  
  gCon.push({id:id, ws:ws, state:WsProtocol.wsState_new});
  
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
				reply.conID = id;
				ws.send(JSON.stringify(reply), function() {  })
			
				gCon[conIdx].state = WsProtocol.wsState_hello;
			}
			else console.log("[E] ws msg: cliHello, state "+gCon[conIdx].state);
		break;
		
		case WsProtocol.wsOP_cliLogin:
			if(gCon[conIdx].state == WsProtocol.wsState_new)
			{
				gCon[conIdx].state = WsProtocol.wsState_hello;
			}
			else console.log("[E] ws msg: cliLogin, state "+gCon[conIdx].state);		
		break;
		
		case WsProtocol.wsOP_msgToBase:
		break;
		
		case WsProtocol.wsOP_msgToUser:
		break;
		
		default:
			console.log("[E] ws msg: unknown op")
			break;
	};
	
  });

  ws.on("close", function() 
  {
    console.log("ws close "+id)
    //clearInterval(id);
  });
});
