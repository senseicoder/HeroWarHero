<?php

require 'common.inc.php';

if(empty($argv[2])) {
	echo ListeEpisodes($argv[1]);
}
else {
	echo GenerateGoEpisode($argv[1], $argv[2], $iSaisonMax);
}