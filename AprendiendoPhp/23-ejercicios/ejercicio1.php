<?php

/* 
iniciar una sesion que aumente su valor en uno o disminuya su valor en uno en funcion de si el parametro get counter está a uno o a cero
 */
session_start();
if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}

if(isset($_GET['counter']) && $_GET['counter']==1 ){
    $_SESSION['numero']++;
}else{
    $_SESSION['numero']--;
}
?>
<h1>El valor de la session numero es: <?= $_SESSION['numero'] ?></h1>
<a href="ejercicio1.php?counter=1">AUMETAR EL VALOR</a>

<a href="ejercicio1.php?counter=0">Disminuir el valor</a>
    