<?php

/* 
para mostrar el valos de las cookies, tengo que usar $_cookies, una variable superglobal,
 * es un array asociativo.
 */
if(isset($_COOKIE['micookie'])){
    echo '<h1>'.$_COOKIE['micookie'].'</h1>';
}else{
    echo 'No existe la cookie';
}
if(isset($_COOKIE['unyear'])){
    echo '<h1>'.$_COOKIE['unyear'].'</h1>';
}else{
    echo "No existe la cookie";
}

?>

