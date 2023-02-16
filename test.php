<?php

$b = array(1,2,3,4);
var_dump(sizeof($b));

foreach ($b as $key => $value) {
    echo "$key. $value".PHP_EOL;
};