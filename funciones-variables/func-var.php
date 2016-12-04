<?php
function funcion() {
    echo "En foo()<br />\n";
}

function funcion2($arg = '')
{
    echo "En bar(); el argumento era '$arg'.<br />\n";
}

// Esta es una función de envoltura alrededor de echo
function mostrar_pantalla($cadena)
{
    echo $cadena;
}

$func = 'funcion';
$func();        // Esta funcion  llama a funcion()

$func = 'funcion2';
$func('prueba');  // Esto llama a funcion2()

$func = 'mostrar_pantalla';
$func('prueba');  // Esto llama a a mostrar_pantalla()
?>
