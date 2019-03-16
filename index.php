<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>USANDO VARIABLES</h1>
<?php
$nombre='Moi';
$edad =24;
$salariomensual=8500.50;
$sindicalizado=true;
echo $nombre. '<br>';
echo   $edad. '<br>';
echo $salariomensual. '<br>';
echo $sindicalizado. '<br>';
echo 'EMPLEADO: '.$nombre. ' tiene '. $edad. ' años';
?>
 <h1>Operaciones Aritmeicas</h1>
<?php
$numero1=15;
$numero2=10;
$suma= $numero1+ $numero2;
$resta=$numero1- $numero2; 
$multiplicacion= $numero1* $numero2;
$division= $numero1/ $numero2;
echo ' suma '. $suma.'<br>';
echo ' resta '. $resta.'<br>';
echo ' multiplicacion '. $multiplicacion. '<br>';
echo ' division '.$division.'<br>';

echo ' Suma sin variable '.($numero1+$numero2);

if($sindicalizado==true)
{
  echo 'va a huelga';  
}
else
{
    echo 'trabajara';
}

?>


</body>
</html>