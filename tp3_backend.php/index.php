<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp3_backend.php</title>
</head>
<body>
<?php
echo"<h2>ESTRUCTURAS DE CONTROL: PARTE 2</h2>";
echo"<h3>1. Mostrar los números del 1 al 100</h3>";
$i = 1;
while($i <= 100){
    echo"$i-";
    $i++;
}
echo"<h3>2. Mostrar los números del 100 al 1.</h3>";
$i = 100;
for ($i = 100; $i >= 1; $i--) { 
    echo "$i-"; 
    
}
echo"<h3>3. Mostrar los números pares del 1 al 100.</h3>";
$i=1;
for ($i=1;$i <= 100;$i++){
    if($i % 2==0){
        echo "$i-";
    } 
}
echo"<h3>4. Mostrar los números impares del 1 al 100.</h3>";
$i=1;
for ($i=1;$i <= 100;$i++){
    if($i % 3==0){
        echo "$i-";
    } 
}
echo"<h3>5. Mostrar la suma de los números de 1 a 20.</h3>";
$suma=0;
for ($i = 1; $i <= 20; $i++) { 
    echo ($suma += $i), "-";
}

echo"<h3>6. Mostrar la suma de números pares de 1 a 20.</h3>";
$suma=0;
for ($i = 1; $i <= 20; $i++) { 
    if($i % 2==0){
        echo ($suma += $i), "-";
    } 
}

   




?>
    
</body>
</html>