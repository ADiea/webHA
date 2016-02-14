<?php

	/**
	* French Language file for phpPgAdmin. 
	* @maintainer Guillaume (ioguix) de Rorthais
	*
	* $Id: french.php,v 1.36 2008/03/27 10:46:32 ioguix Exp $
	*/

	// Language and character set
	$lang['applang'] = 'Français';
	$lang['applocale'] = 'fr-FR';
	$lang['applangdir'] = 'ltr';

	// Basic strings
	$lang['strintro'] = 'Bienvenue sur phpPgAdmin.';
	$lang['strppahome'] = 'Page d\'accueil de phpPgAdmin';
	$lang['strpgsqlhome'] = 'Page d\'accueil de PostgreSQL';
	$lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
	$lang['strlocaldocs'] = 'Documentation PostgreSQL (local)';
	$lang['strreportbug'] = 'Rapporter un bug';
	$lang['strviewfaq'] = 'Lire la FAQ';
	$lang['strviewfaq_url'] = 'http://phppgadmin.sourceforge.net/?page=faq';

	// Basic strings
	$lang['strlogin'] = 'Connexion';
	$lang['strloginfailed'] = 'Échec de la connexion';
	$lang['strlogindisallowed'] = 'Connexion désactivée pour raison de sécurité';
	$lang['strserver'] = 'Serveur';
	$lang['strservers'] = 'Serveurs';
	$lang['strgroupservers'] = 'Serveurs du groupe "%s"';
	$lang['strallservers'] = 'Tous les serveurs';
	$lang['strintroduction'] = 'Introduction';
	$lang['strhost'] = 'Hôte';
	$lang['strport'] = 'Port';
	$lang['strlogout'] = 'Déconnexion';
	$lang['strowner'] = 'Propriétaire';
	$lang['straction'] = 'Action';
	$lang['stractions'] = 'Actions';
	$lang['strname'] = 'Nom';
	$lang['strdefinition'] = 'Définition';
	$lang['strproperties'] = 'Propriétés';
	$lang['strbrowse'] = 'Parcourir';
	$lang['strenable'] = 'Activer';
	$lang['strdisable'] = 'Désactiver';
	$lang['strdrop'] = 'Supprimer';
	$lang['strdropped'] = 'Supprimé';
	$lang['strnull'] = 'NULL (le mot)';
	$lang['strnotnull'] = 'NOT NULL';
	$lang['strprev'] = 'Précédent';
	$lang['strnext'] = 'Suivant';
	$lang['strfirst'] = '<< Début';
	$lang['strlast'] = 'Fin >>';
	$lang['strfailed'] = 'Échec';
	$lang['strcreate'] = 'Créer';
	$lang['strcreated'] = 'Créé';
	$lang['strcomment'] = 'Commentaire';
	$lang['strlength'] = 'Longueur';
	$lang['strdefault'] = 'Défaut';
	$lang['stralter'] = 'Modifier';
	$lang['strok'] = 'OK';
	$lang['strcancel'] = 'Annuler';
	$lang['strkill'] = 'Tuer';
	$lang['strac'] = 'Activer la complétion automatique';
	$lang['strsave'] = 'Sauvegarder';
	$lang['strreset'] = 'Réinitialiser';
	$lang['strrestart'] = 'Redémarrer';
	$lang['strinsert'] = 'Insérer';
	$lang['strselect'] = 'Sélectionner';
	$lang['strdelete'] = 'Effacer';
	$lang['strupdate'] = 'Modifier';
	$lang['strreferences'] = 'Références';
	$lang['stryes'] = 'Oui';
	$lang['strno'] = 'Non';
	$lang['strtrue'] = 'TRUE';
	$lang['strfalse'] = 'FALSE';
	$lang['stredit'] = 'Éditer';
	$lang['strcolumn'] = 'Colonne';
	$lang['strcolumns'] = 'Colonnes';
	$lang['strrows'] = 'ligne(s)';
	$lang['strrowsaff'] = 'ligne(s) affectée(s).';
	$lang['strobjects'] = 'objet(s)';
	$lang['strback'] = 'Retour';
	$lang['strqueryresults'] = 'Résultats de la requête';
	$lang['strshow'] = 'Voir';
	$lang['strempty'] = 'Vider';
	$lang['strlanguage'] = 'Langage';
	$lang['strencoding'] = 'Codage';
	$lang['strvalue'] = 'Valeur';
	$lang['strunique'] = 'Unique';
	$lang['strprimary'] = 'Primaire';
	$lang['strexport'] = 'Exporter';
	$lang['strimport'] = 'Importer';
	$lang['strallowednulls'] = 'Autoriser les caractères NULL';
	$lang['strbackslashn'] = '\N';
	$lang['stremptystring'] = 'Chaîne/champ vide';
	$lang['strsql'] = 'SQL';
	$lang['stradmin'] = 'Admin';
	$lang['strvacuum'] = 'Vacuum';
	$lang['stranalyze'] = 'Analyze';
	$lang['strclusterindex'] = 'Cluster';
	$lang['strclustered'] = 'En Cluster ?';
	$lang['strreindex'] = 'Reindex';
	$lang['strexecute'] = 'Lancer';
	$lang['stradd'] = 'Ajouter';
	$lang['strevent'] = 'Événement';
	$lang['strwhere'] = 'Où';
	$lang['strinstead'] = 'Faire à la place';
	$lang['strwhen'] = 'Quand';
	$lang['strformat'] = 'Format';
	$lang['strdata'] = 'Donnée';
	$lang['strconfirm'] = 'Confirmer';
	$lang['strexpression'] = 'Expression';
	$lang['strellipsis'] = '...';
	$lang['strseparator'] = ' :';
	$lang['strexpand'] = 'Étendre';
	$lang['strcollapse'] = 'Réduire';
	$lang['strfind'] = 'Rechercher';
	$lang['stroptions'] = 'Options';
	$lang['strrefresh'] = 'Rafraichir';
	$lang['strdownload'] = 'Télécharger';
	$lang['strdownloadgzipped'] = 'Télécharger avec compression gzip';
	$lang['strinfo'] = 'Info';
	$lang['stroids'] = 'OID';
	$lang['stradvanced'] = 'Avancé';
	$lang['strvariables'] = 'Variables';
	$lang['strprocess'] = 'Processus';
	$lang['strprocesses'] = 'Processus';
	$lang['strsetting'] = 'Paramétrage';
	$lang['streditsql'] = 'Éditer SQL';
	$lang['strruntime'] = 'Temps d\'exécution total : %s ms';
	$lang['strpaginate'] = 'Paginer les résultats';
	$lang['struploadscript'] = 'ou importer un script SQL :';
	$lang['strstarttime'] = 'Heure de début';
	$lang['strfile'] = 'Fichier';
	$lang['strfileimported'] = 'Fichier importé.';
	$lang['strtrycred'] = 'Utilisez ces identifiants pour tous les serveurs';
	$lang['strconfdropcred'] = 'For security reason, disconnecting will destroy your shared login information. Are you sure you want to disconnect ?';
	$lang['strconfdropcred'] = 'Par mesure de sécurité, la déconnexion supprimera le partage de vos identifiants pour tous les serveurs. Êtes-vous certain de vouloir vous déconnecter ?';
	$lang['stractionsonmultiplelines'] = 'Actions sur plusieurs lignes';
	$lang['strselectall'] = 'Sélectionner tout';
	$lang['strunselectall'] = 'Desélectionner tout';
	$lang['strlocale'] = 'Locale';
	$lang['strcollation'] = 'Tri';
	$lang['strctype'] = 'Type de cartactère';
	$lang['strdefaultvalues'] = 'Valeurs par défaut';
	$lang['strnewvalues'] = 'Nouvelles valeurs';
	$lang['strstart'] = 'Démarrer';
	$lang['strstop'] = 'Arrêter';
	$lang['strgotoppage'] = 'Haut de la page';
	$lang['strtheme'] = 'Thème';

	// Admin
	$lang['stradminondatabase'] = 'Les actions d\'administration suivantes s\'appliquent à l\'ensemble de la base de donnée %s.';
	$lang['stradminontable'] = 'Les actions d\'administration suivantes s\'appliquent à la table %s.';

	// User-supplied SQL history
	$lang['strhistory'] = 'Historique';
	$lang['strnohistory'] = 'Pas d\'historique.';
	$lang['strclearhistory'] = 'Éffacer l\'historique';
	$lang['strdelhistory'] = 'Supprimer de l\'historique';
	$lang['strconfdelhistory'] = 'Voulez-vous vraiment supprimer cette requête de l\'historique ?';
	$lang['strconfclearhistory'] = 'Voulez-vous vraiment éffacer l\'historique ?';
	$lang['strnodatabaseselected'] = 'Veuillez sélectionner une base de données.';

	// Database Sizes
	$lang['strnoaccess'] = 'Pas d\'Accès'; 
	$lang['strsize'] = 'Taille';
	$lang['strbytes'] = 'octets';
	$lang['strkb'] = ' Ko';
	$lang['strmb'] = ' Mo';
	$lang['strgb'] = ' Go';
	$lang['strtb'] = ' To';

	// Error handling
	$lang['strnoframes'] = 'Cette application fonctionne mieux avec un navigateur pouvant afficher des frames mais peut être utilisée sans frames en suivant les liens ci-dessous.';
	$lang['strnoframeslink'] = 'Utiliser sans frames';
	$lang['strbadconfig'] = 'Le fichier de configuration config.inc.php est obsolète. Vous avez besoin de le regénérer à partir de config.inc.php-dist.';
	$lang['strnotloaded'] = 'Vous n\'avez pas compilé correctement le support de la base de données dans votre installation de PHP.';
	$lang['strpostgresqlversionnotsupported'] = 'Cette version de PostgreSQL n\'est pas supportée. Merci de mettre à jour PHP à la version %s ou ultérieure.';
	$lang['strbadschema'] = 'Schéma spécifié invalide.';
	$lang['strbadencoding'] = 'Impossible de spécifier l\'encodage de la base de données.';
	$lang['strsqlerror'] = 'Erreur SQL :';
	$lang['strinstatement'] = 'Dans l\'instruction :';
	$lang['strinvalidparam'] = 'Paramètres de script invalides.';
	$lang['strnodata'] = 'Pas de résultats.';
	$lang['strnoobjects'] = 'Aucun objet trouvé.';
	$lang['strrownotunique'] = 'Pas d\'identifiant unique pour cette ligne.';
	$lang['strnoreportsdb'] = 'Vous n\'avez pas créé la base de données reports. Lisez le fichier INSTALL pour en savoir plus.';
	$lang['strnouploads'] = 'Importation de fichiers désactivée.';
	$lang['strimporterror'] = 'Erreur d\'importation.';
	$lang['strimporterror-fileformat'] = 'Erreur d\'importation : échec lors de la détermination automatique du format de fichier.';
	$lang['strimporterrorline'] = 'Erreur d\'importation à la ligne %s.';
	$lang['strimporterrorline-badcolumnnum'] = 'Erreur d\'importation sur la ligne %s : la ligne ne possède pas le bon nombre de colonnes.';
	$lang['strimporterror-uploadedfile'] = 'Erreur d\'importation : le fichier n\'a pas pû être récupéré sur le serveur.';
	$lang['strcannotdumponwindows'] = 'La sauvegarde de table complexe et des noms de schémas n\'est pas supporté sur Windows.';
	$lang['strinvalidserverparam'] = 'Tentative de connexion avec un serveur invalide, il est possible que quelqu\'un essai de pirater votre système.'; 
	$lang['strnoserversupplied'] = 'Aucun serveur fournis !';
	$lang['strbadpgdumppath'] = 'Erreur d\'export : n\'a pu exécuter pg_dump (chemin indiqué dans votre conf/config.inc.php : %s). Merci de corriger le chemin dans votre configuration et de vous reconnecter.';
	$lang['strbadpgdumpallpath'] = 'Erreur d\'export : n\'a pu exécuter pg_dumpall (chemin indiqué dans votre conf/config.inc.php : %s). Merci de corriger le chemin dans votre configuration et de vous reconnecter.';
	$lang['strconnectionfail'] = 'Connexion au serveur échouée.';

	// Tables
	$lang['strtable'] = 'Table';
	$lang['strtables'] = 'Tables';
	$lang['strshowalltables'] = 'Voir toutes les tables';
	$lang['strnotables'] = 'Aucune table trouvée.';
	$lang['strnotable'] = 'Aucune table trouvée.';
	$lang['strcreatetable'] = 'Créer une table';
	$lang['strcreatetablelike'] = 'Créer une table d\'après une table existante';
	$lang['strcreatetablelikeparent'] = 'Table modèle';
	$lang['strcreatelikewithdefaults'] = 'inclure les valeurs par défaut.';
	$lang['strcreatelikewithconstraints'] = 'inclure les contraintes.';
	$lang['strcreatelikewithindexes'] = 'inclure les indexes.';
	$lang['strtablename'] = 'Nom de la table';
	$lang['strtableneedsname'] = 'Vous devez donner un nom pour votre table.';
	$lang['strtablelikeneedslike'] = 'Vous devez préciser une table modèle.';
	$lang['strtableneedsfield'] = 'Vous devez spécifier au moins un champ.';
	$lang['strtableneedscols'] = 'Vous devez indiquer un nombre valide de colonnes.';
	$lang['strtablecreated'] = 'Table créée.';
	$lang['strtablecreatedbad'] = 'Échec de la création de table.';
	$lang['strconfdroptable'] = 'Êtes-vous sur de vouloir supprimer la table « %s » ?';
	$lang['strtabledropped'] = 'Table supprimée.';
	$lang['strtabledroppedbad'] = 'Échec lors de la suppression de table.';
	$lang['strconfemptytable'] = 'Êtes-vous sûr de vouloir vider la table « %s » ?';
	$lang['strtableemptied'] = 'Table vide.';
	$lang['strtableemptiedbad'] = 'Échec du vidage de la table.';
	$lang['strinsertrow'] = 'Insérer un enregistrement.';
	$lang['strrowinserted'] = 'Enregistrement inséré.';
	$lang['strrowinsertedbad'] = 'Échec lors de l\'insertion d\'un enregistrement.';
	$lang['strnofkref'] = 'Aucune valeur correspondate pour la clé étrangère %s.';
	$lang['strrowduplicate'] = 'Échec lors de l\'insertion d\'un enregistrement, a tenté de faire une insertion dupliquée.';
	$lang['streditrow'] = 'Éditer l\'enregistrement.';
	$lang['strrowupdated'] = 'Enregistrement mis à jour.';
	$lang['strrowupdatedbad'] = 'Échec de mise à jour de l\'enregistrement.';
	$lang['strdeleterow'] = 'Effacer l\'enregistrement';
	$lang['strconfdeleterow'] = 'Êtes-vous sûr de vouloir supprimer cet enregistrement ?';
	$lang['strrowdeleted'] = 'Enregistrement supprimé.';
	$lang['strrowdeletedbad'] = 'Échec lors de la suppression de l\'enregistrement.';
	$lang['strinsertandrepeat'] = 'Insérer et répéter';
	$lang['strnumcols'] = 'Nombre de colonnes';
	$lang['strcolneedsname'] = 'Vous devez spécifier un nom pour la colonne';
	$lang['strselectallfields'] = 'Sélectionner tous les champs';
	$lang['strselectneedscol'] = 'Vous devez sélectionner au moins une colonne.';
	$lang['strselectunary'] = 'Les opérateurs unaires ne peuvent avoir de valeurs.';
	$lang['strcolumnaltered'] = 'Colonne modifiée.';
	$lang['strcolumnalteredbad'] = 'Échec lors de la modification de la colonne.';
	$lang['strconfdropcolumn'] = 'Êtes-vous sûr de vouloir supprimer la colonne « %s » de la table « %s » ?';
	$lang['strcolumndropped'] = 'Colonne supprimée.';
	$lang['strcolumndroppedbad'] = 'Échec lors de la suppression de la colonne.';
	$lang['straddcolumn'] = 'Ajouter une colonne';
	$lang['strcolumnadded'] = 'Colonne ajoutée.';
	$lang['strcolumnaddedbad'] = 'Échec lors de l\'ajout de la colonne.';
	$lang['strcascade'] = 'CASCADE';
	$lang['strtablealtered'] = 'Table modifiée.';
	$lang['strtablealteredbad'] = 'Échec lors de la modification de la table.';
	$lang['strdataonly'] = 'Données seulement';
	$lang['strstructureonly'] = 'Structure seulement';
	$lang['strstructureanddata'] = 'Structure et données';
	$lang['strtabbed'] = 'Tabulé';
	$lang['strauto'] = 'Auto';
	$lang['strconfvacuumtable'] = 'Êtes-vous sûr de vouloir faire un vacuum de « %s » ?';
	$lang['strconfanalyzetable'] = 'Êtes-vous sûr de vouloir éffectuer un ANALYZE sur « %s » ?';
	$lang['strconfreindextable'] = 'Êtes-vous sûr de vouloir réindexer « %s » ?';
	$lang['strconfclustertable'] = 'Êtes-vous sûr de vouloir lancer un CLUSTER sur «%s » ?';
	$lang['strestimatedrowcount'] = 'Nombre d\'enregistrements estimés';
	$lang['strspecifytabletoanalyze'] = 'Vous devez spécifier au moins une table à analyzer';
	$lang['strspecifytabletoempty'] = 'Vous devez spécifier au moins une table à vider';
	$lang['strspecifytabletodrop'] = 'Vous devez spécifier au moins une table à supprimer';
	$lang['strspecifytabletovacuum'] = 'Vous devez spécifier au moins une table sur laquelle éffectuer le vacuum';
	$lang['strspecifytabletoreindex'] = 'Vous devez spécifier au moins une table à réindexer.';
	$lang['strspecifytabletocluster'] = 'Vous devez spécifier au moins une table sur laquelle éffectuer la commande CLUSTER.';
	$lang['strnofieldsforinsert'] = 'Vous ne pouvez insérer de données dans une table sans champs.';

	// Columns
	$lang['strcolprop'] = 'Propriétés de la Colonne';
	$lang['strnotableprovided'] = 'Aucune table fournie !';

	// Users
	$lang['struser'] = 'Utilisateur';
	$lang['strusers'] = 'Utilisateurs';
	$lang['strusername'] = 'Utilisateur';
	$lang['strpassword'] = 'Mot de passe';
	$lang['strsuper'] = 'Super utilisateur ?';
	$lang['strcreatedb'] = 'Créer base de données ?';
	$lang['strexpires'] = 'Expiration';
	$lang['strsessiondefaults'] = 'Session par défaut';
	$lang['strnousers'] = 'Aucun utilisateur trouvé.';
	$lang['struserupdated'] = 'Utilisateur mis à jour.';
	$lang['struserupdatedbad'] = 'Échec lors de la mise à jour de l\'utilisateur.';
	$lang['strshowallusers'] = 'Voir tous les utilisateurs';
	$lang['strcreateuser'] = 'Créer un utilisateur';
	$lang['struserneedsname'] = 'Vous devez donner un nom pour votre utilisateur.';
	$lang['strusercreated'] = 'Utilisateur créé.';
	$lang['strusercreatedbad'] = 'Échec lors de la création de l\'utilisateur.';
	$lang['strconfdropuser'] = 'Êtes-vous sûr de vouloir supprimer l\'utilisateur « %s » ?';
	$lang['struserdropped'] = 'Utilisateur supprimé.';
	$lang['struserdroppedbad'] = 'Échec lors de la suppression de l\'utilisateur.';
	$lang['straccount'] = 'Comptes';
	$lang['strchangepassword'] = 'Modifier le mot de passe';
	$lang['strpasswordchanged'] = 'Mot de passe modifié.';
	$lang['strpasswordchangedbad'] = 'Échec lors de la modification du mot de passe.';
	$lang['strpasswordshort'] = 'Le mot de passe est trop court.';
	$lang['strpasswordconfirm'] = 'Le mot de passe de confirmation est différent.';

	// Groups
	$lang['strgroup'] = 'Groupe';
	$lang['strgroups'] = 'Groupes';
	$lang['strshowallgroups'] = 'Afficher tous les groupes';
	$lang['strnogroup'] = 'Groupe introuvable.';
	$lang['strnogroups'] = 'Aucun groupe trouvé.';
	$lang['strcreategroup'] = 'Créer un groupe';
	$lang['strgroupneedsname'] = 'Vous devez indiquer un nom pour votre groupe.';
	$lang['strgroupcreated'] = 'Groupe créé.';
	$lang['strgroupcreatedbad'] = 'Échec lors de la création du groupe.';
	$lang['strconfdropgroup'] = 'Êtes-vous sûr de vouloir supprimer le groupe « %s » ?';
	$lang['strgroupdropped'] = 'Groupe supprimé.';
	$lang['strgroupdroppedbad'] = 'Échec lors de la suppression du groupe.';
	$lang['strmembers'] = 'Membres';
	$lang['strmemberof'] = 'Membre de';
	$lang['stradminmembers'] = 'Membres admin';
	$lang['straddmember'] = 'Ajouter un membre';
	$lang['strmemberadded'] = 'Membre ajouté.';
	$lang['strmemberaddedbad'] = 'Échec lors de l\'ajout du membre.';
	$lang['strdropmember'] = 'Supprimer un membre';
	$lang['strconfdropmember'] = 'Êtes-vous sûr de vouloir supprimer le membre « %s » du groupe « %s » ?';
	$lang['strmemberdropped'] = 'Membre supprimé.';
	$lang['strmemberdroppedbad'] = 'Échec lors de la suppression du membre.';

	// Roles
	$lang['strrole'] = 'Rôle';
	$lang['strroles'] = 'Rôles';
	$lang['strshowallroles'] = 'Afficher tous les rôles';
	$lang['strnoroles'] = 'Aucun rôle trouvé.';
	$lang['strinheritsprivs'] = 'Hérite des droits ?';
	$lang['strcreaterole'] = 'Créer un rôle';
	$lang['strcancreaterole'] = 'Peut créer un rôle ?';
	$lang['strrolecreated'] = 'Rôle créé.';
	$lang['strrolecreatedbad'] = 'Échec lors de la création du rôle.';
	$lang['strrolealtered'] = 'Rôle modifié.';
	$lang['strrolealteredbad'] = 'Échec lors de la modification du rôle.';
	$lang['strcanlogin'] = 'Peut se connecter ?';
	$lang['strconnlimit'] = 'Limite de connexion';
	$lang['strdroprole'] = 'Supprimer un rôle';
	$lang['strconfdroprole'] = 'Êtes-vous sûr de vouloir supprimer le rôle « %s » ?';
	$lang['strroledropped'] = 'Rôle supprimé.';
	$lang['strroledroppedbad'] = 'Échec lors de la suppression du rôle.';
	$lang['strnolimit'] = 'Aucune limite';
	$lang['strnever'] = 'Jamais';
	$lang['strroleneedsname'] = 'Vous devez donner un nom à ce rôle.';

	// Privileges
	$lang['strprivilege'] = 'Droit';
	$lang['strprivileges'] = 'Droits';
	$lang['strnoprivileges'] = 'Cet objet possède les droits par défault.';
	$lang['strgrant'] = 'Accorder (GRANT)';
	$lang['strrevoke'] = 'Révoquer (REVOKE)';
	$lang['strgranted'] = 'Droits accordés.';
	$lang['strgrantfailed'] = 'Échec lors de l\'octroi des droits.';
	$lang['strgrantbad'] = 'Vous devez spécifier au moins un utilisateur ou groupe et au moins un droit.';
	$lang['strgrantor'] = 'Grantor';
	$lang['strasterisk'] = '*';

	// Databases
	$lang['strdatabase'] = 'Base de données';
	$lang['strdatabases'] = 'Bases de données';
	$lang['strshowalldatabases'] = 'Voir toutes les bases de données';
	$lang['strnodatabases'] = 'Aucune base de données trouvée.';
	$lang['strcreatedatabase'] = 'Créer une base de données';
	$lang['strdatabasename'] = 'Nom de la base de données';
	$lang['strdatabaseneedsname'] = 'Vous devez donner un nom pour votre base de données.';
	$lang['strdatabasecreated'] = 'Base de données créée.';
	$lang['strdatabasecreatedbad'] = 'Échec lors de la création de la base de données.';
	$lang['strconfdropdatabase'] = 'Êtes-vous sûr de vouloir supprimer la base de données « %s » ?';
	$lang['strdatabasedropped'] = 'Base de données supprimée.';
	$lang['strdatabasedroppedbad'] = 'Échec lors de la suppression de la base de données.';
	$lang['strentersql'] = 'Veuillez saisir ci-dessous la requête SQL à exécuter :';
	$lang['strsqlexecuted'] = 'Requête SQL exécutée.';
	$lang['strvacuumgood'] = 'Vacuum exécuté.';
	$lang['strvacuumbad'] = 'Échec du Vacuum.';
	$lang['stranalyzegood'] = 'Analyse effectuée.';
	$lang['stranalyzebad'] = 'Échec de l\'analyse.';
	$lang['strreindexgood'] = 'Réindexation exécutée.';
	$lang['strreindexbad'] = 'Échec de la réindexation.';
	$lang['strfull'] = 'Intégral (FULL)';
	$lang['strfreeze'] = 'Freeze';
	$lang['strforce'] = 'Forcer';
	$lang['strsignalsent'] = 'Signal envoyé.';
	$lang['strsignalsentbad'] = 'Échec lors de l\'envoi du signal.';
	$lang['strallobjects'] = 'Tous les objets';
	$lang['strdatabasealtered'] = 'Base de données modifiée.';
	$lang['strdatabasealteredbad'] = 'Échec lors de la modification de la base de données.';
	$lang['strspecifydatabasetodrop'] = 'Vous devez spécifier au moins une base de données à supprimer';
	$lang['strtemplatedb'] = 'Modèle';
	$lang['strconfanalyzedatabase'] = 'Êtes vous sûr de vouloir éffectuer un ANALYZE sur toutes les tables de la base de données « %s » ?';
	$lang['strconfvacuumdatabase'] = 'Êtes vous sûr de vouloir éffectuer un VACUUM sur toutes les tables de la base de données « %s » ?';
	$lang['strconfreindexdatabase'] = 'Êtes vous sûr de vouloir réindexer toutes les tables de la base de données « %s » ?';
	$lang['strconfclusterdatabase'] = 'Êtes vous sûr de vouloir éffectuer un CLUSTER sur toutes les tables de la base de données « %s » ?';

	// Views
	$lang['strview'] = 'Vue';
	$lang['strviews'] = 'Vues';
	$lang['strshowallviews'] = 'Voir toutes les vues';
	$lang['strnoview'] = 'Aucne vue trouvée.';
	$lang['strnoviews'] = 'Aucune vue trouvée.';
	$lang['strcreateview'] = 'Créer une vue';
	$lang['strviewname'] = 'Nom de la vue';
	$lang['strviewneedsname'] = 'Vous devez indiquer un nom pour votre vue.';
	$lang['strviewneedsdef'] = 'Vous devez indiquer une définition pour votre vue.';
	$lang['strviewneedsfields'] = 'Vous devez préciser les colonnes que vous voulez sélectionner dans votre vue.';
	$lang['strviewcreated'] = 'Vue créée.';
	$lang['strviewcreatedbad'] = 'Échec lors de la création de la vue.';
	$lang['strconfdropview'] = 'Êtes-vous sûr de vouloir supprimer la vue « %s » ?';
	$lang['strviewdropped'] = 'Vue supprimée.';
	$lang['strviewdroppedbad'] = 'Échec lors de la suppression de la vue.';
	$lang['strviewupdated'] = 'Vue mise à jour.';
	$lang['strviewupdatedbad'] = 'Échec lors de la mise à jour de la vue.';
	$lang['strviewlink'] = 'Clés liées';
	$lang['strviewconditions'] = 'Conditions supplémentaires';
	$lang['strcreateviewwiz'] = 'Créer une vue avec l\'assistant';
	$lang['strrenamedupfields'] = 'Renommer les champs dupliqués';
	$lang['strdropdupfields'] = 'Ignorer les champs dupliqués';
	$lang['strerrordupfields'] = 'Erreur en cas de champs dupliqués';
	$lang['strviewaltered'] = 'Vue modifiée.';
	$lang['strviewalteredbad'] = 'Échec lors de la modification de la vue.';
	$lang['strspecifyviewtodrop'] = 'Vous devez spécifier au moins une vue à supprimer.';

	// Sequences
	$lang['strsequence'] = 'Séquence';
	$lang['strsequences'] = 'Séquences';
	$lang['strshowallsequences'] = 'Voir toutes les séquences';
	$lang['strnosequence'] = 'Aucune séquence trouvée.';
	$lang['strnosequences'] = 'Aucune séquence trouvée.';
	$lang['strcreatesequence'] = 'Créer une séquence';
	$lang['strlastvalue'] = 'Dernière valeur';
	$lang['strincrementby'] = 'Incrémenter par ';
	$lang['strstartvalue'] = 'Valeur de départ';
	$lang['strrestartvalue'] = 'Valeur de redémarrage';
	$lang['strmaxvalue'] = 'Valeur maximale';
	$lang['strminvalue'] = 'Valeur minimale';
	$lang['strcachevalue'] = 'Valeur de cache';
	$lang['strlogcount'] = 'Comptage';
	$lang['strcancycle'] = 'Peut boucler?';
	$lang['striscalled'] = 'Incrémentera la dernière valeur avant de retourner la prochaine valeur (is_called) ?';
	$lang['strsequenceneedsname'] = 'Vous devez spécifier un nom pour votre séquence.';
	$lang['strsequencecreated'] = 'Séquence créée.';
	$lang['strsequencecreatedbad'] = 'Échec lors de la création de la séquence.'; 
	$lang['strconfdropsequence'] = 'Êtes-vous sûr de vouloir supprimer la séquence « %s » ?';
	$lang['strsequencedropped'] = 'Séquence supprimée.';
	$lang['strsequencedroppedbad'] = 'Échec lors de la suppression de la séquence.';
	$lang['strsequencerestart'] = 'Séquence redémarrée.';
	$lang['strsequencerestartbad'] = 'Échec tu redémarrage de la séquence.';
	$lang['strsequencereset'] = 'Séquence initialisée.';
	$lang['strsequenceresetbad'] = 'Échec lors de l\'initialisation de la séquence.';
	$lang['strsequencealtered'] = 'Séquence modifiée.';
	$lang['strsequencealteredbad'] = 'Échec lors de la modification de la séquence.';
	$lang['strsetval'] = 'Initialiser à une valeur';
	$lang['strsequencesetval'] = 'Séquence initialisée.';
	$lang['strsequencesetvalbad'] = 'Échec lors de l\'initialisation de la séquence.';
	$lang['strnextval'] = 'Incrémenter la valeur';
	$lang['strsequencenextval'] = 'Séquence incrémentée.';
	$lang['strsequencenextvalbad'] = 'Échec lors de l\'incrémentation de la valeur.';
	$lang['strspecifysequencetodrop'] = 'Vous devez spécifier au moins une séquence à supprimer.';

	// Indexes
	$lang['strindex'] = 'Index';
	$lang['strindexes'] = 'Index';
	$lang['strindexname'] = 'Nom de l\'index';
	$lang['strshowallindexes'] = 'Voir tous les index';
	$lang['strnoindex'] = 'Aucun index trouvé.';
	$lang['strnoindexes'] = 'Aucun index trouvé.';
	$lang['strcreateindex'] = 'Créer un index';
	$lang['strtabname'] = 'Nom de la table';
	$lang['strcolumnname'] = 'Nom de la colonne';
	$lang['strindexneedsname'] = 'Vous devez indiquer un nom pour votre index';
	$lang['strindexneedscols'] = 'Vous devez indiquer un nombre valide de colonnes.';
	$lang['strindexcreated'] = 'Index créé';
	$lang['strindexcreatedbad'] = 'Échec lors de la création de l\'index.';
	$lang['strconfdropindex'] = 'Êtes-vous sûr de vouloir supprimer l\'index « %s » ?';
	$lang['strindexdropped'] = 'Index supprimé.';
	$lang['strindexdroppedbad'] = 'Échec lors de la suppression de l\'index.';
	$lang['strkeyname'] = 'Nom de la clé';
	$lang['struniquekey'] = 'Clé unique';
	$lang['strprimarykey'] = 'Clé primaire';
	$lang['strindextype'] = 'Type d\'index';
	$lang['strtablecolumnlist'] = 'Liste des colonnes';
	$lang['strindexcolumnlist'] = 'Liste des colonnes dans l\'index';
	$lang['strclusteredgood'] = 'Cluster effectué.';
	$lang['strclusteredbad'] = 'Échec du cluster.';
	$lang['strconcurrently'] = 'En parallèle';
	$lang['strnoclusteravailable'] = 'La table n\'est pas encore ordonnée selon un index.';

	// Rules
	$lang['strrules'] = 'Règles';
	$lang['strrule'] = 'Règle';
	$lang['strshowallrules'] = 'Voir toutes les règles';
	$lang['strnorule'] = 'Aucune règle trouvée.';
	$lang['strnorules'] = 'Aucune règle trouvée.';
	$lang['strcreaterule'] = 'Créer une règle';
	$lang['strrulename'] = 'Nom de la règle';
	$lang['strruleneedsname'] = 'Vous devez indiquer un nom pour votre règle.';
	$lang['strrulecreated'] = 'Règle créée.';
	$lang['strrulecreatedbad'] = 'Échec lors de la création de la règle.';
	$lang['strconfdroprule'] = 'Êtes-vous sûr de vouloir supprimer la règle « %s » sur « %s » ?';
	$lang['strruledropped'] = 'Règle supprimée.';
	$lang['strruledroppedbad'] = 'Échec lors de la suppression de la règle.';

	// Constraints
	$lang['strconstraint'] = 'Contrainte';
	$lang['strconstraints'] = 'Contraintes';
	$lang['strshowallconstraints'] = 'Voir toutes les contraintes';
	$lang['strnoconstraints'] = 'Aucune contrainte trouvée.';
	$lang['strcreateconstraint'] = 'Créer une contrainte';
	$lang['strconstraintcreated'] = 'Création d\'une contrainte.';
	$lang['strconstraintcreatedbad'] = 'Échec lors de la création de la contrainte.';
	$lang['strconfdropconstraint'] = 'Êtes-vous sûr de vouloir supprimer la contrainte « %s » sur « %s » ?';
	$lang['strconstraintdropped'] = 'Contrainte supprimée.';
	$lang['strconstraintdroppedbad'] = 'Échec lors de la suppression de la contrainte.';
	$lang['straddcheck'] = 'Ajouter une contrainte';
	$lang['strcheckneedsdefinition'] = 'La contrainte a besoin d\'une définition.';
	$lang['strcheckadded'] = 'Contrainte ajoutée.';
	$lang['strcheckaddedbad'] = 'Échec lors de l\'ajout d\'une contrainte de vérification (CHECK).';
	$lang['straddpk'] = 'Ajouter une clé primaire';
	$lang['strpkneedscols'] = 'La clé primaire nécessite au moins une colonne.';
	$lang['strpkadded'] = 'Clé primaire ajoutée.';
	$lang['strpkaddedbad'] = 'Échec lors de l\'ajout de la clé primaire.';
	$lang['stradduniq'] = 'Ajouter une clé unique';
	$lang['struniqneedscols'] = 'Une clé unique nécessite au moins une colonne.';
	$lang['struniqadded'] = 'La clé unique a été ajoutée.';
	$lang['struniqaddedbad'] = 'Échec lors de la création de la clé unique.';
	$lang['straddfk'] = 'Ajouter une clé étrangère';
	$lang['strfkneedscols'] = 'Une clé étrangère nécessite au moins une colonne.';
	$lang['strfkneedstarget'] = 'Une clé étrangère nécessite une table cible.';
	$lang['strfkadded'] = 'La clé étrangère a été ajoutée.';
	$lang['strfkaddedbad'] = 'Échec lors de la création de la clé étrangère.';
	$lang['strfktarget'] = 'Table cible';
	$lang['strfkcolumnlist'] = 'Liste des colonnes de la clé';
	$lang['strondelete'] = 'ON DELETE';
	$lang['stronupdate'] = 'ON UPDATE';

	// Functions
	$lang['strfunction'] = 'Fonction';
	$lang['strfunctions'] = 'Fonctions';
	$lang['strshowallfunctions'] = 'Voir toutes les fonctions';
	$lang['strnofunction'] = 'Aucune fonction trouvée.';
	$lang['strnofunctions'] = 'Aucune fonction trouvée.';
	$lang['strcreateplfunction'] = 'Créer une fonction PL/SQL';
	$lang['strcreateinternalfunction'] = 'Créer une fonction interne';
	$lang['strcreatecfunction'] = 'Créer une fonction C';
	$lang['strfunctionname'] = 'Nom de la fonction';
	$lang['strreturns'] = 'Valeur de sortie';
	$lang['strproglanguage'] = 'Langage';
	$lang['strfunctionneedsname'] = 'Vous devez indiquer un nom pour votre fonction.';
	$lang['strfunctionneedsdef'] = 'Vous devez indiquer une définition pour votre fonction.';
	$lang['strfunctioncreated'] = 'Fonction créée.';
	$lang['strfunctioncreatedbad'] = 'Échec lors de la création de la fonction.';
	$lang['strconfdropfunction'] = 'Êtes-vous sûr de vouloir supprimer la fonction « %s » ?';
	$lang['strfunctiondropped'] = 'Fonction supprimée.';
	$lang['strfunctiondroppedbad'] = 'Échec lors de la suppression de la fonction.';
	$lang['strfunctionupdated'] = 'Fonction mise à jour.';
	$lang['strfunctionupdatedbad'] = 'Échec lors de la mise à jour de la fonction.';
	$lang['strobjectfile'] = 'Fichier objet';
	$lang['strlinksymbol'] = 'Symbole lien';
	$lang['strarguments'] = 'Arguments';
	$lang['strargmode'] = 'Mode';
	$lang['strargtype'] = 'Type';
	$lang['strargadd'] = 'Ajouter un autre argument';
	$lang['strargremove'] = 'Supprimer cet argument';
	$lang['strargnoargs'] = 'Cet fonction ne prend pas d\'arguments.';
	$lang['strargenableargs'] = 'Active les arguments passés à cette fonction.';
	$lang['strargnorowabove'] = 'Il doit y avoir une ligne au-dessus de cette ligne.';
	$lang['strargnorowbelow'] = 'Il doit y avoir une ligne en-dessous de cette ligne.';
	$lang['strargraise'] = 'Monter.';
	$lang['strarglower'] = 'Descendre.';
	$lang['strargremoveconfirm'] = 'Êtes-vous sûr de vouloir supprimer cet argument ? cette opération ne peut pas être annulée.';
	$lang['strfunctioncosting'] = 'Coût de la function';
	$lang['strresultrows'] = 'Lignes de résultat';
	$lang['strexecutioncost'] = 'Coût d\'exécution';
	$lang['strspecifyfunctiontodrop'] = 'Vous devez spécifier au moins une fonction à supprimer.';

	// Triggers
	$lang['strtrigger'] = 'Trigger';
	$lang['strtriggers'] = 'Triggers';
	$lang['strshowalltriggers'] = 'Voir tous les triggers';
	$lang['strnotrigger'] = 'Aucun trigger trouvé.';
	$lang['strnotriggers'] = 'Aucun trigger trouvé.';
	$lang['strcreatetrigger'] = 'Créer un trigger';
	$lang['strtriggerneedsname'] = 'Vous devez indiquer un nom pour votre trigger.';
	$lang['strtriggerneedsfunc'] = 'Vous devez indiquer une fonction pour votre trigger.';
	$lang['strtriggercreated'] = 'Trigger créé.';
	$lang['strtriggercreatedbad'] = 'Échec lors de la création du trigger.';
	$lang['strconfdroptrigger'] = 'Êtes-vous sûr de vouloir supprimer le trigger « %s » sur « %s » ?';
	$lang['strconfenabletrigger'] = 'Êtes-vous sûr de vouloir activer le trigger « %s » sur « %s» ?';
	$lang['strconfdisabletrigger'] = 'Êtes-vous sûr de vouloir désactiver le trigger « %s » sur « %s» ?';
	$lang['strtriggerdropped'] = 'Trigger supprimé.';
	$lang['strtriggerdroppedbad'] = 'Échec lors de la suppression du trigger.';
	$lang['strtriggerenabled'] = 'Trigger activé.';
	$lang['strtriggerenabledbad'] = 'Échec lors de l\'activation du trigger.';
	$lang['strtriggerdisabled'] = 'Trigger désactivé.';
	$lang['strtriggerdisabledbad'] = 'Échec lors de la désactivation du trigger.';
	$lang['strtriggeraltered'] = 'Trigger modifié.';
	$lang['strtriggeralteredbad'] = 'Échec lors de la modification du trigger.';
	$lang['strforeach'] = 'Pour chaque';

	// Types
	$lang['strtype'] = 'Type';
	$lang['strtypes'] = 'Types';
	$lang['strshowalltypes'] = 'Voir tous les types';
	$lang['strnotype'] = 'Aucun type trouvé.';
	$lang['strnotypes'] = 'Aucun type trouvé.';
	$lang['strcreatetype'] = 'Créer un type';
	$lang['strcreatecomptype'] = 'Créer un type composé';
	$lang['strcreateenumtype'] = 'Créer un type enum';
	$lang['strtypeneedsfield'] = 'Vous devez spécifier au moins un champ.';
	$lang['strtypeneedsvalue'] = 'Vous devez spécifier au moins une valeur.';
	$lang['strtypeneedscols'] = 'Vous devez spécifier un nombre valide de champs.';
	$lang['strtypeneedsvals'] = 'Vous devez spécifier un nombre valide de valeurs.';
	$lang['strinputfn'] = 'Fonction d\'entrée';
	$lang['stroutputfn'] = 'Fonction de sortie';
	$lang['strpassbyval'] = 'Passée par valeur ?';
	$lang['stralignment'] = 'Alignement';
	$lang['strelement'] = 'Élément';
	$lang['strdelimiter'] = 'Délimiteur';
	$lang['strstorage'] = 'Stockage';
	$lang['strfield'] = 'Champ';
	$lang['strnumfields'] = 'Nombre de champs';
	$lang['strnumvalues'] = 'Nombre de valeurs';
	$lang['strtypeneedsname'] = 'Vous devez indiquer un nom pour votre type.';
	$lang['strtypeneedslen'] = 'Vous devez indiquer une longueur pour votre type.';
	$lang['strtypecreated'] = 'Type créé';
	$lang['strtypecreatedbad'] = 'Échec lors de la création du type.';
	$lang['strconfdroptype'] = 'Êtes-vous sûr de vouloir supprimer le type « %s » ?';
	$lang['strtypedropped'] = 'Type supprimé.';
	$lang['strtypedroppedbad'] = 'Échec lors de la suppression du type.';
	$lang['strflavor'] = 'Genre';
	$lang['strbasetype'] = 'Base';
	$lang['strcompositetype'] = 'Composite';
	$lang['strpseudotype'] = 'Pseudo';
	$lang['strenum'] = 'Enum';
	$lang['strenumvalues'] = 'Valeurs de l\'enum';

	// Schemas
	$lang['strschema'] = 'Schéma';
	$lang['strschemas'] = 'Schémas';
	$lang['strshowallschemas'] = 'Voir tous les schémas';
	$lang['strnoschema'] = 'Aucun schéma trouvé.';
	$lang['strnoschemas'] = 'Aucun schéma trouvé.';
	$lang['strcreateschema'] = 'Créer un schéma';
	$lang['strschemaname'] = 'Nom du schéma';
	$lang['strschemaneedsname'] = 'Vous devez indiquer un nom pour votre schéma.';
	$lang['strschemacreated'] = 'Schéma créé';
	$lang['strschemacreatedbad'] = 'Échec lors de la création du schéma.';
	$lang['strconfdropschema'] = 'Êtes-vous sûr de vouloir supprimer le schéma « %s » ?';
	$lang['strschemadropped'] = 'Schéma supprimé.';
	$lang['strschemadroppedbad'] = 'Échec lors de la suppression du schéma.';
	$lang['strschemaaltered'] = 'Schema modifié.';
	$lang['strschemaalteredbad'] = 'Échec lors de la modification du schéma.';
	$lang['strsearchpath'] = 'Chemin de recherche du schéma';
	$lang['strspecifyschematodrop'] = 'Vous devez spécifier au moins un schéma à supprimer.';

	// Reports
	$lang['strreport'] = 'Rapport';
	$lang['strreports'] = 'Rapports';
	$lang['strshowallreports'] = 'Voir tous les rapports';
	$lang['strnoreports'] = 'Aucun rapport trouvé.';
	$lang['strcreatereport'] = 'Créer un rapport';
	$lang['strreportdropped'] = 'Rapport supprimé.';
	$lang['strreportdroppedbad'] = 'Échec lors de la suppression du rapport.';
	$lang['strconfdropreport'] = 'Êtes-vous sûr de vouloir supprimer le rapport « %s » ?';
	$lang['strreportneedsname'] = 'Vous devez indiquer un nom pour votre rapport.';
	$lang['strreportneedsdef'] = 'Vous devez fournir une requête SQL pour votre rapport.';
	$lang['strreportcreated'] = 'Rapport sauvegardé.';
	$lang['strreportcreatedbad'] = 'Échec lors de la sauvegarde du rapport.';

	// Domains
	$lang['strdomain'] = 'Domaine';
	$lang['strdomains'] = 'Domaines';
	$lang['strshowalldomains'] = 'Voir tous les domaines';
	$lang['strnodomains'] = 'Pas de domaine trouvé.';
	$lang['strcreatedomain'] = 'Créer un domaine';
	$lang['strdomaindropped'] = 'Domaine supprimé.';
	$lang['strdomaindroppedbad'] = 'Échec lors de la suppression.';
	$lang['strconfdropdomain'] = 'Êtes-vous sur de vouloir supprimer le domaine « %s » ?';
	$lang['strdomainneedsname'] = 'Vous devez donner un nom pour votre domaine.';
	$lang['strdomaincreated'] = 'Domaine créé.';
	$lang['strdomaincreatedbad'] = 'Échec lors de la création du domaine.';
	$lang['strdomainaltered'] = 'Domaine modifié.';
	$lang['strdomainalteredbad'] = 'Échec lors de la modification du domaine.';

	// Operators
	$lang['stroperator'] = 'Opérateur';
	$lang['stroperators'] = 'Opérateurs';
	$lang['strshowalloperators'] = 'Voir tous les opérateurs';
	$lang['strnooperator'] = 'Pas d\'opérateur trouvé.';
	$lang['strnooperators'] = 'Pas d\'opérateur trouvé.';
	$lang['strcreateoperator'] = 'Créer un opérateur';
	$lang['strleftarg'] = 'Type de l\'argument de gauche';
	$lang['strrightarg'] = 'Type de l\'argument de droite';
	$lang['strcommutator'] = 'Commutateur';
	$lang['strnegator'] = 'Négation';
	$lang['strrestrict'] = 'Restriction';
	$lang['strjoin'] = 'Jointure';
	$lang['strhashes'] = 'Hachages';
	$lang['strmerges'] = 'Assemblages';
	$lang['strleftsort'] = 'Tri gauche';
	$lang['strrightsort'] = 'Tri droite';
	$lang['strlessthan'] = 'Plus petit que';
	$lang['strgreaterthan'] = 'Plus grand que';
	$lang['stroperatorneedsname'] = 'Vous devez donner un nom pour votre opérateur.';
	$lang['stroperatorcreated'] = 'Opérateur créé';
	$lang['stroperatorcreatedbad'] = 'Échec lors de la création de l\'opérateur.';
	$lang['strconfdropoperator'] = 'Êtes-vous sur de vouloir supprimer l\'opérateur « %s » ?';
	$lang['stroperatordropped'] = 'Opérateur supprimé.';
	$lang['stroperatordroppedbad'] = 'Échec lors de la suppression de l\'opérateur.';

	// Casts
	$lang['strcasts'] = 'Conversions';
	$lang['strnocasts'] = 'Aucune conversion trouvée.';
	$lang['strsourcetype'] = 'Type source';
	$lang['strtargettype'] = 'Type cible';
	$lang['strimplicit'] = 'Implicite';
	$lang['strinassignment'] = 'En affectation';
	$lang['strbinarycompat'] = '(binaire compatible)';

	// Conversions
	$lang['strconversions'] = 'Conversions';
	$lang['strnoconversions'] = 'Aucune conversion trouvée.';
	$lang['strsourceencoding'] = 'Codage source';
	$lang['strtargetencoding'] = 'Codage cible';

	// Languages
	$lang['strlanguages'] = 'Langages';
	$lang['strnolanguages'] = 'Pas de langage trouvé.';
	$lang['strtrusted'] = 'De confiance';

	// Info
	$lang['strnoinfo'] = 'Pas d\'information disponible.';
	$lang['strreferringtables'] = 'Tables référentes';
	$lang['strparenttables'] = 'Tables parents';
	$lang['strchildtables'] = 'Tables enfants';

	// Aggregates
	$lang['straggregate'] = 'Agrégat';
	$lang['straggregates'] = 'Agrégats';
	$lang['strnoaggregates'] = 'Aucun agrégat trouvé.';
	$lang['stralltypes'] = '(tous les types)';
	$lang['strcreateaggregate'] = 'Créer un agrégat';
	$lang['straggrbasetype'] = 'Type de données en entrée';
	$lang['straggrsfunc'] = 'Fonction de transition de l\'état';
	$lang['straggrstype'] = 'Type de la valeur de transition';
	$lang['straggrffunc'] = 'Fonction finale';
	$lang['straggrinitcond'] = 'Condition initiale';
	$lang['straggrsortop'] = 'Opérateur de tri';
	$lang['strconfdropaggregate'] = 'Êtes-vous sûr de vouloir supprimer l\'agrégat « %s »?';
	$lang['straggregatedropped'] = 'Agrégat supprimé.';
	$lang['straggregatedroppedbad'] = 'Échec lors de la suppression de l\'agrégat.';
	$lang['straggraltered'] = 'Agrégat modifié.';
	$lang['straggralteredbad'] = 'Échec lors de la modification de l\'agrégat.';
	$lang['straggrneedsname'] = 'Vous devez indiquer un nom pour l\'agrégat';
	$lang['straggrneedsbasetype'] = 'Vous devez indiquer le type de données en entrée pour l\'agrégat';
	$lang['straggrneedssfunc'] = 'Vous devez indiquer le nom de la fonction de transition de l\'agrégat';
	$lang['straggrneedsstype'] = 'Vous devez indiquer le type de donnée pour la valeur d\'état pour l\'agrégat';
	$lang['straggrcreated'] = 'Agrégat créé.';
	$lang['straggrcreatedbad'] = 'Échec lors de la création de l\'agrégat.';
	$lang['straggrshowall'] = 'Afficher tous les agrégats';

	// Operator Classes
	$lang['stropclasses'] = 'Classes d\'opérateur';
	$lang['strnoopclasses'] = 'Aucune classe d\'opérateur trouvée.';
	$lang['straccessmethod'] = 'Méthode d\'accès';

	// Stats and performance
	$lang['strrowperf'] = 'Performance des enregistrements';
	$lang['strioperf'] = 'Performance en entrée/sortie';
	$lang['stridxrowperf'] = 'Performance des index';
	$lang['stridxioperf'] = 'Performance des index en entrées/sortie';
	$lang['strpercent'] = '%';
	$lang['strsequential'] = 'Séquentiel';
	$lang['strscan'] = 'Parcours';
	$lang['strread'] = 'Lecture';
	$lang['strfetch'] = 'Récupération';
	$lang['strheap'] = 'En-tête';
	$lang['strtoast'] = 'TOAST';
	$lang['strtoastindex'] = 'Index TOAST';
	$lang['strcache'] = 'Cache';
	$lang['strdisk'] = 'Disque';
	$lang['strrows2'] = 'Enregistrements';

	// Tablespaces
	$lang['strtablespace'] = 'Tablespace';
	$lang['strtablespaces'] = 'Tablespaces';
	$lang['strshowalltablespaces'] = 'Voir tous les tablespaces';
	$lang['strnotablespaces'] = 'Aucun tablespace trouvé.';
	$lang['strcreatetablespace'] = 'Créer un tablespace';
	$lang['strlocation'] = 'Emplacement';
	$lang['strtablespaceneedsname'] = 'Vous devez donner un nom à votre tablespace.';
	$lang['strtablespaceneedsloc'] = 'Vous devez préciser un répertoire dans lequel sera créé le tablespace.';
	$lang['strtablespacecreated'] = 'Tablespace créé.';
	$lang['strtablespacecreatedbad'] = 'Échec lors de la création du tablespace.';
	$lang['strconfdroptablespace'] = 'Êtes-vous sûr de vouloir supprimer le tablespace « %s » ?';
	$lang['strtablespacedropped'] = 'Tablespace supprimé.';
	$lang['strtablespacedroppedbad'] = 'Échec lors de la suppression du tablespace.';
	$lang['strtablespacealtered'] = 'Tablespace modifié.';
	$lang['strtablespacealteredbad'] = 'Échec lors de la modification du tablespace.';

	// Slony clusters
	$lang['strcluster'] = 'Cluster';
	$lang['strnoclusters'] = 'Aucun cluster trouvé.';
	$lang['strconfdropcluster'] = 'Êtesvous sûr de vouloir supprimer le cluster « %s » ?';
	$lang['strclusterdropped'] = 'Cluster supprimé.';
	$lang['strclusterdroppedbad'] = 'Échec lors de la suppression du cluster.';
	$lang['strinitcluster'] = 'Initialiser le cluster';
	$lang['strclustercreated'] = 'Cluster initialisé.';
	$lang['strclustercreatedbad'] = 'Échec lors de l\'initialisation du cluster.';
	$lang['strclusterneedsname'] = 'Vous devez donner un nom au cluster.';
	$lang['strclusterneedsnodeid'] = 'Vous devez donner un ID au noeud local.';

	// Slony nodes
	$lang['strnodes'] = 'Noeuds';
	$lang['strnonodes'] = 'Aucun noeud trouvé.';
	$lang['strcreatenode'] = 'Créer un noeud';
	$lang['strid'] = 'ID';
	$lang['stractive'] = 'Actif';
	$lang['strnodecreated'] = 'Noeud créé.';
	$lang['strnodecreatedbad'] = 'Échec lors de la création du noeud.';
	$lang['strconfdropnode'] = 'Êtes-vous sûr de vouloir supprimer le noeud « %s » ?';
	$lang['strnodedropped'] = 'Noeud supprimé.';
	$lang['strnodedroppedbad'] = 'Échec lors de la suppression du noeud';
	$lang['strfailover'] = 'Basculer (failover)';
	$lang['strnodefailedover'] = 'Node basculé.';
	$lang['strnodefailedoverbad'] = 'Échec lors du basculement du noeud.';
	$lang['strstatus'] = 'Statut';	
	$lang['strhealthy'] = 'État';
	$lang['stroutofsync'] = 'Hors synchro';
	$lang['strunknown'] = 'Inconnu';

	// Slony paths 
	$lang['strpaths'] = 'Chemins';
	$lang['strnopaths'] = 'Aucun chemin trouvé.';
	$lang['strcreatepath'] = 'Créer un chemin';
	$lang['strnodename'] = 'Nom du noeud';
	$lang['strnodeid'] = 'ID du noeud';
	$lang['strconninfo'] = 'Chaîne de connexion';
	$lang['strconnretry'] = 'Secondes avant une nouvelle tentative de connexion';
	$lang['strpathneedsconninfo'] = 'Vous devez donner une chaîne de connexion pour le chemin.';
	$lang['strpathneedsconnretry'] = 'Vous devez donner le nombre de secondes d\'attente avant une nouvelle tentative de connexion.';
	$lang['strpathcreated'] = 'Chemin créé.';
	$lang['strpathcreatedbad'] = 'Échec lors de la création du chemin.';
	$lang['strconfdroppath'] = 'Êtes-vous sûr de vouloir supprimer le chemin « %s » ?';
	$lang['strpathdropped'] = 'Chemin supprimé.';
	$lang['strpathdroppedbad'] = 'Échec lors de la suppression du chemin.';

	// Slony listens
	$lang['strlistens'] = 'Écoutes';
	$lang['strnolistens'] = 'Aucune écoute trouvée.';
	$lang['strcreatelisten'] = 'Créer une écoute';
	$lang['strlistencreated'] = 'Écoute créée.';
	$lang['strlistencreatedbad'] = 'Échec lors de la création de l\'écoute.';
	$lang['strconfdroplisten'] = 'Êtes-vous sûr de vouloir supprimer l\'écoute « %s » ?';
	$lang['strlistendropped'] = 'Écoute supprimé.';
	$lang['strlistendroppedbad'] = 'Échec lors de la suppression de l\'écoute.';

	// Slony replication sets
	$lang['strrepsets'] = 'Ensembles de réplication';
	$lang['strnorepsets'] = 'Aucun ensemble de réplication trouvé.';
	$lang['strcreaterepset'] = 'Créer un ensemble de réplication';
	$lang['strrepsetcreated'] = 'Ensemble de réplication créé.';
	$lang['strrepsetcreatedbad'] = 'Échec lors de la création de l\'ensemble de réplication.';
	$lang['strconfdroprepset'] = 'Êtes-vous sûr de vouloir supprimer l\'ensemble de réplication « %s » ?';
	$lang['strrepsetdropped'] = 'Ensemble de réplication supprimé.';
	$lang['strrepsetdroppedbad'] = 'Échec lors de la suppression de l\'ensemble de réplication.';
	$lang['strmerge'] = 'Assemblage';
	$lang['strmergeinto'] = 'Assembler dans';
	$lang['strrepsetmerged'] = 'Ensembles de réplication assemblés.';
	$lang['strrepsetmergedbad'] = 'Échec lors de l\'assemblage des ensembles de réplication.';
	$lang['strmove'] = 'Déplacement';
	$lang['strneworigin'] = 'Nouvelle origine';
	$lang['strrepsetmoved'] = 'Ensemble de réplication déplacé.';
	$lang['strrepsetmovedbad'] = 'Échec lors du déplacement de l\'ensemble de réplication.';
	$lang['strnewrepset'] = 'Nouvel ensemble de réplication';
	$lang['strlock'] = 'Verrou';
	$lang['strlocked'] = 'Verrouillé';
	$lang['strunlock'] = 'Déverrouillé';
	$lang['strconflockrepset'] = 'Êtes-vous sûr de vouloir verrouiller l\'ensemble de réplication « %s » ?';
	$lang['strrepsetlocked'] = 'Ensemble de réplication verrouillé.';
	$lang['strrepsetlockedbad'] = 'Échec lors du verrouillage de l\'ensemble de réplication.';
	$lang['strconfunlockrepset'] = 'Êtes-vous sûr de vouloir déverrouiller l\'ensemble de réplication « %s » ?';
	$lang['strrepsetunlocked'] = 'Ensemble de réplication déverrouillé.';
	$lang['strrepsetunlockedbad'] = 'Échec lors du déverrouillage de l\'ensemble de réplication.';
	$lang['stronlyonnode'] = 'Seulement sur le noeud';
	$lang['strddlscript'] = 'Script DDL';
	$lang['strscriptneedsbody'] = 'Vous devez fournir un script à exécuter sur tous les noeuds.';
	$lang['strscriptexecuted'] = 'Script DDL de l\'ensemble de réplication exécuté.';
	$lang['strscriptexecutedbad'] = 'Échec lors de l\'exécution du script DDL de l\'ensemble de réplication.';
	$lang['strtabletriggerstoretain'] = 'Les triggers suivants ne seront PAS désactivés par Slony:';

	// Slony tables in replication sets
	$lang['straddtable'] = 'Ajouter une table';
	$lang['strtableneedsuniquekey'] = 'La table à ajouter doit avoir une clé primaire ou une clé unique.';
	$lang['strtableaddedtorepset'] = 'Table ajouter à l\'ensemble de réplication.';
	$lang['strtableaddedtorepsetbad'] = 'Échec lors de l\'ajout de la table dans l\'ensemble de réplication.';
	$lang['strconfremovetablefromrepset'] = 'Êtes-vous sûr de vouloir supprimer la table « %s » de l\'ensemble de réplication « %s » ?';
	$lang['strtableremovedfromrepset'] = 'Table supprimée de l\'ensemble de réplication.';
	$lang['strtableremovedfromrepsetbad'] = 'Échec lors de la suppression de la table de l\'ensemble de réplication.';

	// Slony sequences in replication sets
	$lang['straddsequence'] = 'Ajouter une séquence';
	$lang['strsequenceaddedtorepset'] = 'Séquence ajoutée à l\'ensemble de réplication.';
	$lang['strsequenceaddedtorepsetbad'] = 'Échec lors de l\'ajout de la séquence à l\'ensemble de réplication.';
	$lang['strconfremovesequencefromrepset'] = 'Êtes-vous sûr de vouloir supprimer la séquence « %s » de l\'ensemble de réplication « %s »?';
	$lang['strsequenceremovedfromrepset'] = 'Séquence supprimée de l\'ensemble de réplication.';
	$lang['strsequenceremovedfromrepsetbad'] = 'Échec lors de la suppression de la séquence à partir de l\'ensemble de réplication.';

	// Slony subscriptions
	$lang['strsubscriptions'] = 'Souscriptions';
	$lang['strnosubscriptions'] = 'Aucune souscription trouvée.';

	// Miscellaneous
	$lang['strtopbar'] = '%s lancé sur %s:%s -- Vous êtes connecté avec le profil « %s »';
	$lang['strtimefmt'] = 'j M Y, H:i';
	$lang['strhelp'] = 'Aide';
	$lang['strhelpicon'] = '?';
	$lang['strhelppagebrowser'] = 'Navigateur pour l\'aide';
	$lang['strselecthelppage'] = 'Sélectionner une page d\'aide';
	$lang['strinvalidhelppage'] = 'Page d\'aide invalide.';
	$lang['strlogintitle'] = 'Se connecter à %s';
	$lang['strlogoutmsg'] = 'Déconnecté de %s';
	$lang['strloading'] = 'Chargement...';
	$lang['strerrorloading'] = 'Erreur lors du chargement';
	$lang['strclicktoreload'] = 'Cliquer pour recharger';

	//Autovacuum
	$lang['strautovacuum'] = 'Autovacuum';
	$lang['strturnedon'] = 'Activé'; 
	$lang['strturnedoff'] = 'Désactivé'; 
	$lang['strenabled'] = 'activé';
	$lang['strnovacuumconf'] = 'Aucune configuration autovacuum trouvée.';
	$lang['strvacuumbasethreshold'] = 'Limite de base pour le Vacuum';
	$lang['strvacuumscalefactor'] = 'Facteur d\'échelle pour le Vacuum';
	$lang['stranalybasethreshold'] = 'Limite de base pour le Analyze';
	$lang['stranalyzescalefactor'] = 'Facteur d\'échelle pour le Analyze';
	$lang['strvacuumcostdelay'] = 'Délai du coût du Vacuum';
	$lang['strvacuumcostlimit'] = 'Limite du coût du Vacuum';
	$lang['strvacuumpertable'] = 'Configuration autovacuum par table';
	$lang['straddvacuumtable'] = 'Configurer autovacuum pour cette table';
	$lang['streditvacuumtable'] = 'Modifier la configuration autovacuum pour la table « %s »';
	$lang['strdelvacuumtable'] = 'Supprimer la configuration autovacuum pour la table « %s » ?';
	$lang['strvacuumtablereset'] = 'Configuration autovacuum par défaut pour la table « %s ».';
	$lang['strdelvacuumtablefail'] = 'Échec lors de la suppression de la configuration autovacuumpour la table « %s »';
	$lang['strsetvacuumtablesaved'] = 'Configuration autovacuum pour la table « %s » enregistrée.';
	$lang['strsetvacuumtablefail'] = 'Échec de la configuration autovacuum pour la table « %s ».';
	$lang['strspecifydelvacuumtable'] = 'Vous devez spécifier la table où supprimer les paramètres autovacuum.';
	$lang['strspecifyeditvacuumtable'] = 'Vous devez spécifier la table où éditer les paramètres autovacuum.';
	$lang['strnotdefaultinred'] = 'Valeurs différentes de celles par défaut en rouge.';

	//Table-level Locks
	$lang['strlocks'] = 'Verrous';
	$lang['strtransaction'] = 'ID de transaction';
	$lang['strvirtualtransaction'] = 'ID Virtuel de Transaction';
	$lang['strprocessid'] = 'ID du processus';
	$lang['strmode'] = 'Mode du verrou';
	$lang['strislockheld'] = 'Verrou détenu ?';

	// Prepared transactions
	$lang['strpreparedxacts'] = 'Transactions préparées';
	$lang['strxactid'] = 'ID de transaction';
	$lang['strgid'] = 'ID global';

	// Fulltext search
	$lang['strfulltext'] = 'Recherche textuelle';
	$lang['strftsconfig'] = 'Configuration FTS';
	$lang['strftsconfigs'] = 'Configurations';
	$lang['strftscreateconfig'] = 'Créer une configuration FTS';
	$lang['strftscreatedict'] = 'Créer un dictionnaire';
	$lang['strftscreatedicttemplate'] = 'Créer un modèle de dictionnaire';
	$lang['strftscreateparser'] = 'Créer un analyseur syntaxique';
	$lang['strftsnoconfigs'] = 'Aucune configuration FTS trouvée.';
	$lang['strftsconfigdropped'] = 'Configuration FTS supprimée.';
	$lang['strftsconfigdroppedbad'] = 'Échec lors de la suppression de la configuration FTS.';
	$lang['strconfdropftsconfig'] = 'Êtes-vous sûr de vouloir supprimer la configuration FTS « %s » ?';
	$lang['strconfdropftsdict'] = 'Êtes-vous sûr de vouloir supprimer le dictionnaire FTS « %s » ?';
	$lang['strconfdropftsmapping'] = 'Êtes-vous sûr de vouloir supprimer le mapping « %s » de la configuration FTS « %s » ?';
	$lang['strftstemplate'] = 'Modèle';
	$lang['strftsparser'] = 'Analyseur syntaxique';
	$lang['strftsconfigneedsname'] = 'Vous devez donner un nom pour votre configuration FTS.';
	$lang['strftsconfigcreated'] = 'Configuration FTS créée';
	$lang['strftsconfigcreatedbad'] = 'Échec lors de la création de la configuration FTS.';
	$lang['strftsmapping'] = 'Type de jeton';
	$lang['strftsdicts'] = 'Dictionaires';
	$lang['strftsdict'] = 'Dictionaire';
	$lang['strftsemptymap'] = 'Aucune liaisons configurée.';
	$lang['strftsconfigaltered'] = 'Configuration FTS modifiée.';
	$lang['strftsconfigalteredbad'] = 'Échec lors de l\'édition de la configuration FTS.';
	$lang['strftsconfigmap'] = 'Configuration des liaisons type de jeton / dictionnaires';
	$lang['strftsparsers'] = 'Analyseurs syntaxique FTS';
	$lang['strftsnoparsers'] = 'Aucun analyseur syntaxique FTS disponnible.';
	$lang['strftsnodicts'] = 'Aucun dictionnaire FTS disponible.';
	$lang['strftsdictcreated'] = 'Dictionnaire FTS créé';
	$lang['strftsdictcreatedbad'] = 'Échec lors de la création du dictionnaire FTS.';
	$lang['strftslexize'] = 'Lexize';
	$lang['strftsinit'] = 'Init';
	$lang['strftsoptionsvalues'] = 'Options et Valeurs';
	$lang['strftsdictneedsname'] = 'Vous devez donner un nom pour votre dictionnaire FTS.';
	$lang['strftsdictdropped'] = 'Dictionnaire FTS supprimé.';
	$lang['strftsdictdroppedbad'] = 'Échec lors de la suppression du dictionnaire FTS.';
	$lang['strftsdictaltered'] = 'Dictionnaire FTS modifié.';
	$lang['strftsdictalteredbad'] = 'Échec lors de l\'édition du dictionnaire FTS.';
	$lang['strftsaddmapping'] = 'Ajouter une nouvelle liaison';
	$lang['strftsspecifymappingtodrop'] = 'Vous devez spécifier au moins une liaison à suppimer.';
	$lang['strftsspecifyconfigtoalter'] = 'Vous devez spécifier une configuration FTS à modifier';
	$lang['strftsmappingdropped'] = 'Laison supprimée.';
	$lang['strftsmappingdroppedbad'] = 'Échec lors de la suppression de la liaison.';
	$lang['strftsnodictionaries'] = 'Aucun dictionnaire trouvé.';
	$lang['strftsmappingaltered'] = 'Liaison modifiée.';
	$lang['strftsmappingalteredbad'] = 'Échec lors de la modification de la liaison.';
	$lang['strftsmappingadded'] = 'Liaison ajoutée.';
	$lang['strftsmappingaddedbad'] = 'Échec lors de la suppression de la liaison.';
	$lang['strftstabconfigs'] = 'Configurations';
	$lang['strftstabdicts'] = 'Dictionaires';
	$lang['strftstabparsers'] = 'Analyseurs syntaxique';
	$lang['strftscantparsercopy'] = 'Vous ne pouvez spécifier en même temps un modèle et un analyseur lors de la création d\'une configuration FTS.';
?>
