<?php

$Num = 82;
$mnog_1 = 0;
$mnog_2 = 0;
$Max_Sum = 0;

function Summa_Cifr($Cifra){
    $sum = 0;
    while(($Cifra / 10) >= 1) {
        $sum = $sum+($Cifra % 10);
        $Cifra = intval($Cifra / 10);
    }
    $sum = $sum + $Cifra;
    return $sum;
}

for ($i=1; $i<=$Num; $i++){
    if (($Num % $i) == 0) {
        if ($Max_Sum < (Summa_Cifr($i) + Summa_Cifr($Num / $i))) {
            $Max_Sum = Summa_Cifr($i) + Summa_Cifr($Num / $i);
            $mnog_1 = $i;
            $mnog_2 = $Num / $i;
            echo "<pre>";
            print_r("1-й множитель ".$mnog_1." ;");
            print_r("2-й множитель ".$mnog_2." ;");
            print_r("Сумма цифр всего ".$Max_Sum." ;");
            print_r("Сумма цифр 1-го множителя ".Summa_Cifr($i)." ;");
            print_r("Сумма цифр 2-го множителя ".Summa_Cifr($Num / $i)." ;");
            echo "</pre>";
            echo "<br />";

        };
    }
}
echo "<pre>";
print_r("Заданное число ".$Num." ;");
print_r("1-й множитель ".$mnog_1." ;");
print_r("2-й множитель ".$mnog_2." ;");
print_r("Сумма цифр ".$Max_Sum);
echo "</pre>";