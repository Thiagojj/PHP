<?php 

echo "while: ";
$i = 0;
//print $i;
while ($i <20){
    echo $i;
    $i++;
}

echo '<br>do...while: ';
$i = 0;
//print $i;
do {
    echo  $i;
    $i++;
}
while ($i <20);

echo '<br>for: ';
//print $i;
for ($i = 0; $i < 20; $i++){
    echo $i;
}

echo '<br>foreach: ';
//print $i;
$i  = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19];
foreach ($i as $j){
    echo $j;
}






/*$A = 2;
$B = 3;
$C = $A + $B;

if ($C %2 == 2){
    echo 'numero impar';
}

echo 'numero par';

//$SOMA = $A + $B;

//print $SOMA;*/


