<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*imprimindo a variavel primeira vez */
$idade = 30;

echo ($idade);

echo "<br>";

//Primeiro array
$cadastro = array(
     'cliente1' => 'Eduardo'
); 

echo $cadastro['cliente1'];

echo "<br>";

//Primeira função
$numero = 50;

function calc(){
    global $numero;
    echo $numero;
}

calc();

echo "<br>";

?>
</body>
</html>
