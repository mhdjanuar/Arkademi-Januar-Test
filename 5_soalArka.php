<?php

$arr = [
        ['a','g','b'],
        ['a','d','b','e'],
        ['a','d','b','e','f']
      ];

for ($i=0; $i < count($arr) ; $i++) {
    $hasil = [];

    $max = max($arr[$i]);
    
    $hasil[$i] =  $max;
    print_r($hasil);
}

?>
