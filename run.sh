xmacroplay "$DISPLAY" < fermer.file
for i in {1..100}; do 
	xmacroplay "$DISPLAY" < $1
done
