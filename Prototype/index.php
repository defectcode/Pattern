<?php

include("Shepe.php");

$shepe = new Shepe();
$shepe->setName( 'The usual form' );
$shepe->setColor( 'Red' );

$triangle = clone $shepe;
$triangle->setName( 'Triangle' );
$triangle->setColor( 'Blue' );

echo "<pre>";
var_dump( $shepe );
var_dump( $triangle );
echo "</pre>";