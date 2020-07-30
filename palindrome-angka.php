<?php

function palindrom($str) {
  $output = false;
  if(strrev($str) == $str) {
    $output = true;
  }
  return $output;
}

function palindrome_angka($angka) {
  // tulis kode di sini
  if ($angka >= 1 && $angka <=8){
    return $angka + 1;
  }
  if (palindrom($angka)) {
    $angka++;
  }
  while palindrom($angka) == false){
    $angka++;
  }
  return $angka++;
}



// TEST CASES
echo palindrome_angka(8) // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>