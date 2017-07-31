<?php
$Max_Num = 2;

$arr = range(0, $Max_Num);
echo "Задано ";
foreach ($arr as &$value) {
   $value = rand(0,9);
    print_r($value);
}
unset($value);

rsort($arr);
$i = 1;
if (($arr[$Max_Num] % 2) != 0) {
    $Last_Num = $arr[$Max_Num];
    while ($arr[$Max_Num-$i] % 2 != 0){
        $i++;
        if ($Max_Num < $i) break;
    };
    if ($Max_Num < $i);

    else {
            $arr[$Max_Num] = $arr[$Max_Num - $i];
            $arr[$Max_Num - $i] = $Last_Num;
         }
}
if ($Max_Num < $i) {
    echo "<pre>";
    print_r("O-o-ps. Задача не имеет решения!");
    echo "</pre>";
}
else {
    echo "<pre>";
    print_r("Наибольшее возможное чётное число"." ".implode("", $arr));
    echo "</pre>";
}


