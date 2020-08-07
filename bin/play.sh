for i in $@; do 
	echo -e "\n### $i"
	xmacroplay "$DISPLAY" < $i 2>&1 | grep -ve ^XTest -e ^xmacroplay -e ^$
done
