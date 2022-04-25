<?php
$input = 7;
$baris = round($input/2, 0);
// echo $baris;
$space = 0;
//for di bawah ini buat segitiga kebaliks
for ($i=0; $i < $baris; $i++) { //for ini buat baris
 for ($j=1; $j <= $input ; $j++) { // for ini buat bintang ganjil
  if ($j <= $space) {
   echo '&nbsp;';
  } elseif ($space <= $j && $j <= ($input - $space)) {
   echo '*';
  } else {
   echo '&nbsp;';
  }
 }
 echo "<br/>";
 $space++;
}
$space--;
$space--;
$baris --;
//for di bawah ini buat segitiga
for ($i=0; $i < $baris; $i++) { //for ini buat baris
 for ($j=1; $j <= $input ; $j++) { // for ini buat bintang ganjil
  if ($j <= $space) {
   echo '&nbsp;';
  } elseif ($space <= $j && $j <= ($input - $space)) {
   echo '*';
  } else {
   echo '&nbsp;';
  }
 }
 echo "<br/>";
 $space--;
}
// return $joy; 
?>