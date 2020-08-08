<?php

$iSaisonMax = 7;

$aCoords = array(
	01 => array(),
	02 => array(),
	03 => array(
		11 => array('coords'=>'607 687', 'lib'=>'Vallée des sapins'),
	),
	04 => array(),
	05 => array(),
	06 => array(
		01 => array('coords'=>'453 601', 'lib'=>"Trou perdu"),
		07 => array('coords'=>'895 530', 'lib'=>"Etendues Glaciales"),
	),
	07 => array(
		02 => array('coords'=>'522 484', 'lib'=>"Ratelier d'arme"),
		05 => array('coords'=>'776 424', 'lib'=>"Terrain d'entrainement"),
	),
);

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
	$sAttendreCombat = "#attendre_combat\nDelay 80\n#EOB";
	
	if(isset($aCoords[$iSaison][$iEpisode])) {
		return sprintf($sChoix, $iSaison, $iEpisode, $aCoords[$iSaison][$iEpisode]['lib'], $aCoords[$iSaison][$iEpisode]['coords']) 
			. $sValider . $sEquipe . $sAutoPouvoirs . $sAttendreCombat;
	}
	else echo "S${iSaison}E${iEpisode} n'existe pas\n";
}