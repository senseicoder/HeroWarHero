<?php

$aCoords = array(
	01 => array(),
	02 => array(),
	03 => array(),
	04 => array(),
	05 => array(),
	06 => array(
		07 => array('coords'=>'895 530', 'lib'=>"Etendues Glaciales"),
	),
	07 => array(
		05 => array('coords'=>'776 424', 'lib'=>"Terrain d'entrainement"),
	),
);

function GenerateGoSaison($iNum, $iSaisonMax)
{
	$sBegin = "#sélectionner saison %d\n";
	$sBefore = "MotionNotify 378 477\nButtonPress 1\nButtonRelease 1\nDelay 2\n";

	$result = sprintf($sBegin, $iNum);
	for($ct = $iSaisonMax; $ct>$iNum; $ct--) {
		echo "$ct>$iNum\n";
		$result .= $sBefore;
	}
	return $result;
}

function GenerateGoEpisode($iSaison, $iEpisode, $iSaisonMax)
{
	global $aCoords;

	$sChoix = "#episode S%02dE%02d %s\nMotionNotify %s\nButtonPress 1\nButtonRelease 1\nDelay 2\n";
	$sValider = "#valider épisode\nMotionNotify 1076 638\nButtonPress 1\nButtonRelease 1\nDelay 1\n";
	$sEquipe = "#sélection équipe\nMotionNotify 1227 737\nButtonPress 1\nButtonRelease 1\nDelay 1\n";
	$sAutoPouvoirs = "#activer autopouvoirs\nDelay 1\nMotionNotify 1259 670\nButtonPress 1\nButtonRelease 1\n";
	$sAttendreCombat = "#attendre_combat\nDelay 100\n";
	
	if(isset($aCoords[$iSaison][$iEpisode])) {
		return GenerateGoSaison($iSaison, $iSaisonMax)
			. sprintf($sChoix, $iSaison, $iEpisode, $aCoords[$iSaison][$iEpisode]['lib'], $aCoords[$iSaison][$iEpisode]['coords']) 
			. $sValider . $sEquipe . $sAutoPouvoirs . $sAttendreCombat;
	}
	else echo "S${iSaison}E${iEpisode} n'existe pas\n";
}

echo "### 6/7\n";
echo GenerateGoEpisode(6, 7, 7);
echo "\n### 7/5\n";
echo GenerateGoEpisode(7, 5, 7);