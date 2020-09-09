#!/bin/bash

if [ -z "$2" ]; then 
	php bin/episodes.php $1
	exit 0
fi
if [ -z "$3" ]; then nbmax=15; else nbmax=$3; fi

bash bin/play.sh carte <(php bin/selectsaison.php $1)
for i in $(seq 1 $nbmax); do 
	echo "itération $i"
	bash bin/play.sh <(php bin/episodes.php $1 $2) continuer
done
