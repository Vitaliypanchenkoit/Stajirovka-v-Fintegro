<?php

include_once "class_hufman.php";

$buf = 'hhumster';
$obj = new hufman($buf);
$obj->encode();
var_dump($obj->encoded);