<?php
 echo <<<_END
 <!DOCTYPE html>
 <html>
    <head>
        <title>Juego N Puertas</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Juego de N puertas</h1>
        <h3>Elige una puerta</h3>
    
_END;

$puertas =  array('puerta1.png',
                  'puerta2.png',
                  'puerta3.png',
                  'puerta4.png',
                  'puerta5.png',
                  'puerta6.png',
                  'puerta7.png',
                  'puerta8.png',
                  'puerta9.png',
                  'puerta10.png',
                  'puerta11.png',
                  'puerta12.png',
                  'puerta13.png',);

$paginas= array('go()','death()','first()');

echo "<form method='POST' id='form1'>";
$aleatorioPuertas=rand(2,4);
$aleatorioSiguinete=rand(0,$aleatorioPuertas-1);
$aleatorioAnterior=rand(0,$aleatorioPuertas-1);
do {
    $aleatorioAnterior=rand(0,$aleatorioPuertas-1);
} while ($aleatorioAnterior != $aleatorioSiguinete);

for ($i=0; $i < $aleatorioPuertas; $i++) { 
    if($aleatorioSiguinete==$i){
        echo "<img onclick='$paginas[0]' src='".$puertas[rand(0,12)]."'>&nbsp;&nbsp;";
    }
    if($aleatorioAnterior==$i){
        echo "<img onclick='$paginas[2]' src='".$puertas[rand(0,12)]."'>&nbsp;&nbsp;";
    }
    else{
        echo "<img onclick='$paginas[1]' src='".$puertas[rand(0,12)]."'>&nbsp;&nbsp;";
    }
}

echo "</form>";

echo <<<_END
<script>
function go(){
    document.getElementById("form1").action="EjercicioPuertas_3.php";
    document.getElementById("form1").submit();
}
function first(){
    document.getElementById("form1").action="EjercicioPuertas_1.php";
    document.getElementById("form1").submit();
}
function death(){
    document.getElementById("form1").action="EjercicioPuertas_Muerte.php";
    document.getElementById("form1").submit();
}
</script>
_END;
echo "</body></html>";
?>