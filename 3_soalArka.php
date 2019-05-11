<?php

function acak($panjang)
{

  $karakter = 'asdfghjklqwertyuiopzxcvbnm1234567890';

  $string = '';

  for ($i=0; $i < $panjang ; $i++) {
    $pos = rand(0, strlen($karakter)-1);

    $string .= $karakter{$pos};
  }

  return $string;
}

function cetak($cetak)
{
  for ($i=1; $i <= $cetak ; $i++) {
    echo acak(32)."\n";
  }
}

//jalankan fungsi di bawah

cetak(2);

?>
