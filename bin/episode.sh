#!/bin/bash

bash bin/play.sh carte <(php bin/selectsaison.php $1)
for i in {1..100}; do 
	echo "itération $i"
	bash bin/play.sh <(php bin/episodes.php $1 $2) continuer
done
