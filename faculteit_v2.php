<?php

$value = readline("Van welk getal wil je de faculteit weten? "); 

$g = $value;
$s = 1;
while ($g>=1) {
    $s = $s * $g;
    $g--;
}
echo "De faculteit van $value is $s";