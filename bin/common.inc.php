<?php

$iSaisonMax = 7;

$aCoords = array(
	 1 => array(
		 7 => array('coords'=>'894 612', 'lib'=>'Ville  en flamme', 'duree'=>30),
		 8 => array('coords'=>'988 538', 'lib'=>'Chaussée brulante', 'duree'=>30),
	),
	 2 => array(),
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
	 	#aux confins du monde
		11 => array('coords'=>'1062 633', 'lib'=>'Granit du silence', 'duree'=>60),
	),
	 5 => array(),
	 6 => array(
		 1 => array('coords'=>'453 601', 'lib'=>"Trou perdu"),
		 7 => array('coords'=>'895 530', 'lib'=>"Etendues Glaciales"),
	),
	 7 => array(
		 1 => array('coords'=>'455 360', 'lib'=>""),
		 2 => array('coords'=>'522 484', 'lib'=>"Ratelier d'arme"),
		 3 => array('coords'=>'616 475', 'lib'=>""),
		 4 => array('coords'=>'701 436', 'lib'=>""),
		 5 => array('coords'=>'776 424', 'lib'=>"Terrain d'entrainement"),
		 6 => array('coords'=>'898 427', 'lib'=>""),
		 7 => array('coords'=>'818 562', 'lib'=>""),
		 8 => array('coords'=>'723 597', 'lib'=>""),
		 9 => array('coords'=>'667 663', 'lib'=>""),
		10 => array('coords'=>'933 669', 'lib'=>""),
		11 => array('coords'=>'1053 661', 'lib'=>""),
		12 => array('coords'=>'1126 634', 'lib'=>""),
		13 => array('coords'=>'1196 554', 'lib'=>""),
		14 => array('coords'=>'1071 457', 'lib'=>""),
		15 => array('coords'=>'1223 413', 'lib'=>""),
	),
);

#echo "<pre>"; print_r($aCoords);

function GenerateGoSaison($iNum, $iSaisonMax)
{
	$sBegin = "#sélectionner saison %d\n";
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

	$sChoix = "#episode S%02dE%02d %s\nMotionNotify %s\nButtonPress 1\nButtonRelease 1\nDelay 2\n";
	$sValider = "#valider_épisode\nMotionNotify 1076 638\nButtonPress 1\nButtonRelease 1\nDelay 1\n";
	$sEquipe = "#sélection_équipe\nMotionNotify 1227 737\nButtonPress 1\nButtonRelease 1\nDelay 1\n";
	$sAutoPouvoirs = "#activer autopouvoirs\nDelay 4\nMotionNotify 1259 670\nButtonPress 1\nButtonRelease 1\n";
	$sAttendreCombat = "#attendre_combat\nDelay %d\n#EOB";
	
	if(isset($aCoords[$iSaison][$iEpisode])) {
		$iDuree = 80;
		if(isset($aCoords[$iSaison][$iEpisode]['duree'])) $iDuree = $aCoords[$iSaison][$iEpisode]['duree'];
		return sprintf($sChoix, $iSaison, $iEpisode, $aCoords[$iSaison][$iEpisode]['lib'], $aCoords[$iSaison][$iEpisode]['coords']) 
			. $sValider . $sEquipe . $sAutoPouvoirs . sprintf($sAttendreCombat, $iDuree);
	}
	else echo "S${iSaison}E${iEpisode} n'existe pas\n";
}