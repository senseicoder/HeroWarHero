aS06E07=(895 530 "Etendues Glaciales")
aS07E05=(776 424 "Terrain d'entrainement")

aS1=()
aS2=()
aS3=()
aS4=()
aS5=()
aS6=(aS06E07[@])
aS7=(aS07E05[@])

COORDS=(
  0
  aS1[@]
  aS2[@]
  aS3[@]
  aS4[@]
  aS5[@]
  aS6[@]
  aS7[@]
)

echo tout ${!aS06E07[@][0]}
echo zero ${!aS06E07[0]}
echo deux ${!aS06E07[2]}
echo ${!COORDS[6]:1}

#declare -A coords
#coords[6,7]=
#coords[7,5]=

#a=${coords[6,7]}
#echo $a[1]
#echo ${coords[6,7]}[2]
#echo ${coords[6,7]}[3]
#echo ${coords[6,7]} |awk '{print $1" "$2}' 
#echo ${coords[6,7]} |awk '{print $3..$20}' 