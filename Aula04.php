<?php 
//Dois jeitos de declarar if e else por {} ou : enif;

$valor = 10;
if($valor == 10){
    echo 'o valor é igual a 10';
}
else{
    echo 'o valor não é igual a 10';
};

echo "<br>";

if($valor == 10):
    echo 'o valor é igual a 10';
    else:
    echo 'o valor não é igual a 10';
    endif;

echo "<br>";
//estrutura while
$contador = 1;

while ($contador < 10){
    echo $contador . '   ';
    $contador++;
}

echo "<br>";

$contador2 = 1;
while ($contador2 <= 10):
    echo $contador2 . '   ';
    $contador2++;
endwhile;

echo "<br>";

$contador3 = 1;
do{
    echo $contador3 . '   ';
    $contador3++;
} while($contador3 <= 10);
?>