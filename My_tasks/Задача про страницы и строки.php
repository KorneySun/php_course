<?php

$K = 15;
$N = 43;
$Number_Stranic=intval($N / $K)+1;
$Number_Stroki=($N % $K);
echo "<pre>";
 print_r("Страница ".$Number_Stranic." ;");
 print_r("Номер строки на странице ".$Number_Stroki." ;");
echo "</pre>";
