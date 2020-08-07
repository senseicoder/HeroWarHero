#!/bin/bash

bash bin/play.sh carte
for i in {1..100}; do 
	echo "itération $i"
	bash bin/play.sh <(php bin/episodes.php $1 $2) continuer
done
