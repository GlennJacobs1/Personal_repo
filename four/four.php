<?php
require __DIR__ . '/vendor/autoload.php';

use Pino\Numera;

$numera = Numera::init('en');
$res = $numera->convertToWords(123);
echo $res;