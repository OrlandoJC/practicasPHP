<?php
function foo() {
    echo "En foo()<br />\n";
}

function bar($arg = '')
{
    echo "En bar(); el argumento era '$arg'.<br />\n";
}

// Esta es una función de envoltura alrededor de echo
function hacerecho($cadena)
{
    echo $cadena;
}

$func = 'foo';
$func();        // Esto llama a foo()

$func = 'bar';
$func('prueba');  // Esto llama a bar()

$func = 'hacerecho';
$func('prueba');  // Esto llama a hacerecho()
?>
