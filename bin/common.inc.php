<?php

$iSaisonMax = 10;

$aCoords = array(
	 1 => array(
		 7 => array('coords'=>'894 612', 'lib'=>'Ville  en flamme', 'duree'=>40),
		 8 => array('coords'=>'988 538', 'lib'=>'Chaussée brulante', 'duree'=>40),
	),
	 2 => array(
		1 => array('coords'=>'446 672', 'lib'=>'Wilheim', 'duree'=>40),
		2 => array('coords'=>'610 666', 'lib'=>'Cabane de la faucheuse', 'duree'=>40),
		3 => array('coords'=>'548 549', 'lib'=>'Orée', 'duree'=>40),
		4 => array('coords'=>'415 444', 'lib'=>'Chemin embroussaillé', 'duree'=>40),
		5 => array('coords'=>'564 378', 'lib'=>'Forêt dense', 'duree'=>40),
		6 => array('coords'=>'734 445', 'lib'=>'Orée de Wilheim', 'duree'=>40),
		7 => array('coords'=>'888 444', 'lib'=>'Monolithe de Méron', 'duree'=>40),
		8 => array('coords'=>'1014 426', 'lib'=>'Gué secret', 'duree'=>40),
		9 => array('coords'=>'1115 373', 'lib'=>'Fleuve de l\'oubli', 'duree'=>40),
		10 => array('coords'=>'1234 432', 'lib'=>'Fourré magique', 'duree'=>40),
		11 => array('coords'=>'1133 516', 'lib'=>'Trace de Marax', 'duree'=>40),
		12 => array('coords'=>'924 575', 'lib'=>'Route innommée', 'duree'=>40),
		13 => array('coords'=>'969 690', 'lib'=>'Terres désolées', 'duree'=>40),
		14 => array('coords'=>'1099 682', 'lib'=>'Sceau de feu', 'duree'=>40),
		15 => array('coords'=>'1252 657', 'lib'=>'Cratère de lave', 'duree'=>40),
	 ),
	 3 => array(
  		1 => array('coords'=>'443 382', 'lib'=>'avant-poste', 'duree'=>40),
  		2 => array('coords'=>'559 433', 'lib'=>'désert rocailleux', 'duree'=>40),
  		3 => array('coords'=>'716 384', 'lib'=>'escalier de grog', 'duree'=>40),
  		4 => array('coords'=>'823 342', 'lib'=>'falaise poussièreuse', 'duree'=>40),
  		5 => array('coords'=>'921 404', 'lib'=>'ravine pourrissante', 'duree'=>40),
  		6 => array('coords'=>'1081 423', 'lib'=>'montagne vivace', 'duree'=>40),
  		7 => array('coords'=>'897 509', 'lib'=>'pont délabré', 'duree'=>40),
  		8 => array('coords'=>'811 556', 'lib'=>'terres roussies', 'duree'=>40),
  		9 => array('coords'=>'642 599', 'lib'=>'route du deuil', 'duree'=>40),
		10 => array('coords'=>'509 645', 'lib'=>'sanctuaire des ancètres', 'duree'=>40),
		11 => array('coords'=>'607 687', 'lib'=>'Vallée des sapins'),
		12 => array('coords'=>'858 687', 'lib'=>'abords du camp', 'duree'=>40),
		13 => array('coords'=>'1017 652', 'lib'=>'patrouille orque', 'duree'=>40),
		14 => array('coords'=>'1127 599', 'lib'=>'camp frontalier', 'duree'=>40),
		15 => array('coords'=>'1265 680', 'lib'=>'tente du chef', 'duree'=>40),
	),
	 4 => array(
		 1 => array('coords'=>'423 690', 'lib'=>'Terre des bergers'),
		 2 => array('coords'=>'573 687', 'lib'=>'Vent sec', 'duree'=>60),
		 3 => array('coords'=>'641 626', 'lib'=>'Bordure du crépuscule', 'duree'=>60	),
		 4 => array('coords'=>'543 529', 'lib'=>'Grand-route périphérique'),
		 5 => array('coords'=>'421 457', 'lib'=>'Ordalie ténébreuse'),
		 6 => array('coords'=>'489 368', 'lib'=>'Canyon embrasé'),
		 7 => array('coords'=>'606 371', 'lib'=>'Cendre et charbon', 'duree'=>60),
		 8 => array('coords'=>'746 404', 'lib'=>'Aux confins du monde', 'duree'=>60),
		 9 => array('coords'=>'732 522', 'lib'=>'Abime sans fond', 'duree'=>60),
		10 => array('coords'=>'915 622', 'lib'=>'Necropolis'),
		11 => array('coords'=>'1062 633', 'lib'=>'Granit du silence', 'duree'=>60),
		12 => array('coords'=>'1140 553', 'lib'=>'Suaire de la mort', 'duree'=>60),
		13 => array('coords'=>'993 506', 'lib'=>'Dans l\'au-dela', 'duree'=>60),
		14 => array('coords'=>'1077 372', 'lib'=>'Atrium', 'duree'=>60),
		15 => array('coords'=>'1260 365', 'lib'=>'Domaine de Gravehall', 'duree'=>60),
	),
	 5 => array(
		 1 => array('coords'=>'429 358', 'lib'=>'Terrasses de Smagard', 'duree'=>65),
		 2 => array('coords'=>'637 422', 'lib'=>'Obélisque', 'duree'=>65),
		 3 => array('coords'=>'506 547', 'lib'=>'Poussière d\'émeraude', 'duree'=>65),
		 4 => array('coords'=>'438 608', 'lib'=>'Sortie de Gravehall', 'duree'=>65),
		 5 => array('coords'=>'519 671', 'lib'=>'Lumière aveuglante', 'duree'=>65),
		 6 => array('coords'=>'657 680', 'lib'=>'Vie prospère', 'duree'=>65),
		 7 => array('coords'=>'759 678', 'lib'=>'Déferlements empoisonnés', 'duree'=>65),
		 8 => array('coords'=>'835 623', 'lib'=>'Fourré de cigue', 'duree'=>65),
		 9 => array('coords'=>'777 543', 'lib'=>'Rivages dangereux', 'duree'=>65),
		10 => array('coords'=>'827 488', 'lib'=>'Pont du noyeur', 'duree'=>65),
		11 => array('coords'=>'931 486', 'lib'=>'Hote indésirable', 'duree'=>65),
		12 => array('coords'=>'1046 440', 'lib'=>'Foyer ennemi', 'duree'=>43),
		13 => array('coords'=>'1131 373', 'lib'=>'Halte', 'duree'=>65),
		14 => array('coords'=>'1250 404', 'lib'=>'Nature pourpre', 'duree'=>65),
		15 => array('coords'=>'1181 564', 'lib'=>'Maldabois', 'duree'=>65),
	),
	 6 => array(
		 1 => array('coords'=>'453 601', 'lib'=>"Trou perdu"),
		 2 => array('coords'=>'608 665', 'lib'=>'Chénopode malheureux'),
		 3 => array('coords'=>'775 698', 'lib'=>'Tourbier', 'duree'=>65),
		 4 => array('coords'=>'878 683', 'lib'=>'Zone humide', 'duree'=>60),
		 5 => array('coords'=>'976 669', 'lib'=>'Fleurs de mandragore'),
		 6 => array('coords'=>'1101 669', 'lib'=>'Cimetière abandonné'),
		 7 => array('coords'=>'895 530', 'lib'=>"Etendues Glaciales", 'duree'=>50),
		 8 => array('coords'=>'813 514', 'lib'=>'Falaise brumeuse'),
		 9 => array('coords'=>'716 507', 'lib'=>'Terres de Mord Chrone', 'duree'=>40),
		10 => array('coords'=>'575 455', 'lib'=>'Cercle rituel'),
		11 => array('coords'=>'667 393', 'lib'=>'Arches de Tarot', 'duree'=>60),
		12 => array('coords'=>'975 430', 'lib'=>'Nuit éternelle', 'duree'=>60),
		13 => array('coords'=>'1061 464', 'lib'=>'Jeux d\'ombres'),
		14 => array('coords'=>'1142 490', 'lib'=>'Filet du trappeur'),
		15 => array('coords'=>'1232 439', 'lib'=>'Arches d\'épines'),
	),
	 7 => array(
		 1 => array('coords'=>'455 360', 'lib'=>"Porte de l'octroi"),
		 2 => array('coords'=>'522 484', 'lib'=>"Ratelier d'arme"),
		 3 => array('coords'=>'616 475', 'lib'=>"Os rongés"),
		 4 => array('coords'=>'701 436', 'lib'=>"Passage éclairé à la lanterne"),
		 5 => array('coords'=>'776 424', 'lib'=>"Terrain d'entrainement"),
		 6 => array('coords'=>'898 427', 'lib'=>"Sang de la terre"),
		 7 => array('coords'=>'818 562', 'lib'=>"Sueur et sang", 'duree'=>90),
		 8 => array('coords'=>'723 597', 'lib'=>"Nuit des temps", 'duree'=>100),
		 9 => array('coords'=>'667 663', 'lib'=>"Pont sur l'abime", 'duree'=>100),
		10 => array('coords'=>'933 669', 'lib'=>"Plaine des titans"),
		11 => array('coords'=>'1053 661', 'lib'=>"Bataille de Santar"),
		12 => array('coords'=>'1126 634', 'lib'=>"Grande scission"),
		13 => array('coords'=>'1196 554', 'lib'=>"Chemin de guerre"),
		14 => array('coords'=>'1071 457', 'lib'=>"Plaie mortelle", 'duree'=>65),
		15 => array('coords'=>'1223 413', 'lib'=>"Tumulus"),
	),

	 8 => array(
		 1 => array('coords'=>'487 386', 'lib'=>"Capitale des adorateurs du feu", 'duree'=>120),
		 2 => array('coords'=>'634 436', 'lib'=>"Monolithe de la malice", 'duree'=>75),
		 3 => array('coords'=>'737 425', 'lib'=>"Palais anthracite", 'duree'=>120),
		 4 => array('coords'=>'912 441', 'lib'=>"Basaltes", 'duree'=>120),
		 5 => array('coords'=>'811 544', 'lib'=>"Monolithe de la tromperie", 'duree'=>90),
		 6 => array('coords'=>'694 616', 'lib'=>"Ame du volcan", 'duree'=>120),
		 7 => array('coords'=>'898 660', 'lib'=>"Monolithe de l'inimitié", 'duree'=>120),
		 8 => array('coords'=>'975 635', 'lib'=>"Fonderie", 'duree'=>95),
		 9 => array('coords'=>'1059 645', 'lib'=>"Salle de torture", 'duree'=>125),
		10 => array('coords'=>'1153 694', 'lib'=>"Portes de l'incandescence", 'duree'=>120),
		11 => array('coords'=>'1242 590', 'lib'=>"Monolithe de la souffrance", 'duree'=>120),
		12 => array('coords'=>'1100 511', 'lib'=>"Monolithe de la plainte", 'duree'=>140),
		13 => array('coords'=>'1051 466', 'lib'=>"Rivage du désespoir", 'duree'=>120),
		14 => array('coords'=>'1085 386', 'lib'=>"Fleuve de lave", 'duree'=>120),
		15 => array('coords'=>'1218 407', 'lib'=>"Fournaise de l'horreur", 'duree'=>120),
	),
);

#echo "<pre>"; print_r($aCoords);

function GenerateGoSaison($iNum, $iSaisonMax)
{
	$sBegin = "#sélectionner_saison_%d\n";
	$sBefore = "MotionNotify 378 477\nButtonPress 1\nButtonRelease 1\nDelay 2\n";

	$result = sprintf($sBegin, $iNum);
	for($ct = $iSaisonMax; $ct>$iNum; $ct--) {
		$result .= $sBefore;
	}
	return $result;
}

function GenerateGoEpisode($iSaison, $iEpisode, $iSaisonMax)
{
	global $aCoords;

	$sChoix = "#episode_S%02dE%02d_%s\nMotionNotify %s\nButtonPress 1\nButtonRelease 1\nDelay 2\n";
	$sValider = "#valider_épisode\nMotionNotify 1076 638\nButtonPress 1\nButtonRelease 1\nDelay 1\n";
	$sEquipe = "#sélection_équipe\nMotionNotify 1227 737\nButtonPress 1\nButtonRelease 1\nDelay 1\n";
	$sAutoPouvoirs = "#activer_autopouvoirs\nDelay 4\nMotionNotify 1259 670\nButtonPress 1\nButtonRelease 1\n";
	$sAttendreCombat = "#attendre_combat\nDelay %d\n#EOB";
	
	if(isset($aCoords[$iSaison][$iEpisode])) {
		$iDuree = 80;
		if(isset($aCoords[$iSaison][$iEpisode]['duree'])) $iDuree = $aCoords[$iSaison][$iEpisode]['duree'];
		return sprintf($sChoix, $iSaison, $iEpisode, str_replace(' ', '_', $aCoords[$iSaison][$iEpisode]['lib']), 
			$aCoords[$iSaison][$iEpisode]['coords']) 
			. $sValider . $sEquipe . $sAutoPouvoirs . sprintf($sAttendreCombat, $iDuree);
	}
	else echo "S${iSaison}E${iEpisode} n'existe pas\n";
}

function ListeEpisodes($iSaison)
{
	global $aCoords;

	foreach($aCoords[$iSaison] as $iEpisode => $aEpisode) {
		printf("%02d : %s\n", $iEpisode, $aEpisode['lib']);
	}
}
