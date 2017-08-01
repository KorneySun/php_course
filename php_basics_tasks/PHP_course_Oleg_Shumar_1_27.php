<?php

/**
 * Created by PhpStorm.
 * User: dima
 * Date: 01.08.2017
 * Time: 18:24
 */
//1-2 tasks
    $name='Дима';
    $age=160;
    echo "Меня зовут {$name}.";
    echo '<br>';
    echo "Мне {$age} года.";
    echo '<br>';
    if ($age<0 OR !is_numeric($age)){
        echo 'Неизвестное число.';
    }elseif($age>=18 & $age<=59) {
        echo 'Вам ещё работать и работать.';
    } elseif ($age>=60) {
        echo 'Вам пора на пенсию.';
    }  elseif ($age>=0 & $age<=17){
        echo "Вам ещё рано работать.{$age}";
    }

    echo '<br>';
    $day=5;
    switch($day){
        case 1:
            echo "Это рабочий день";
            break;
        case 2:
            echo "Это рабочий день";
            break;
        case 3:
            echo "Это рабочий день";
            break;
        case 4:
            echo "Это рабочий день";
            break;
        case 5:
            echo "Это рабочий день";
            break;
        case 6:
            echo "Это выходной день";
            break;
        case 7:
            echo "Это выходной день";
            break;
        default :
            echo "Неизвестный день";
            break;
    }

        echo '<br>';
        $day=0;
        switch(true){
            case ($day>=1 and $day<=5):
                echo "Это рабочий день";
                break;
            case ($day>=6 && $day<=7):
                echo "Это выходной день";
                break;
            default :
                echo "Неизвестный день";
                break;
            }




echo '<br>';
     $S=75;
     $t=3;
     $Speed_Hours=$S / $t;
     $Speed_Seconds=round(($S*1000 / $t/ 3600),2);
     echo "Скорость движения составляет {$Speed_Hours} км/ч или {$Speed_Seconds} м/с ";

     echo '<br>';
     $foo='bar';
     $bar=10;
     echo $$foo;

     echo '<br>';
     $a=rand(0,100);
     $b=rand(0,100);
     $operator=array('+','-','*','/','%');
     $i=rand(0,4);
     echo"Первое число- $a, второе число- $b, операция- $operator[$i] : Результат - ";

     if((($operator[$i]=='/') || ($operator[$i]=='%'))&($b==0)){
         echo "О-о-п! На ноль делить нельзя!";
     }else {
         switch($operator[$i]){
             case '+':
                echo $a+$b;
                echo " - Это операция сложения";
                break;
             case '-':
                 echo $a-$b;
                 echo " - Это операция вычитания";
                 break;
             case '*':
                 echo $a*$b;
                 echo " - Это операция умножения";
                 break;
             case '/':
                 echo round($a/$b,2);
                 echo " - Это операция деления";
                 break;
             case '%':
                 echo round($a%$b,2);
                 echo " - Это операция остаток от деления";
                 break;
         }
     }

        echo '<br>';
        $a=rand(0,100);
        $b=rand(0,100);
        if ($a>$b){
            echo $a;
            echo '<br>';
            echo"А больше В";
        } elseif ($a<$b){
            echo $b;
            echo '<br>';
            echo"В больше А";
        }elseif ($a=$b){
            echo"А равно В";
        }

        echo '<br>';
        $a='78';
        $b=78;
        if ($a==$b) {
            echo "Переменные равны";
        } else{
            echo "Переменные не равны";
        }
        echo '<br>';
        $a='78';
        $b=78;
        if ($a===$b) {
            echo "Переменные эквивалентны";
        } else{
            echo "Переменные не эквивалентны";
        }

        echo '<br>';
        $a='78';
        $b=78;
        echo "Результат сравнения чисел- ";
        var_dump($a==$b);

        echo '<br>';
        // Приведение целочисленного типа к логическому
        $a = 20;
        echo "20 ";
        var_dump( (bool)$a);
        // Результат true т.к. число не равно 0.

        echo '<br>';
        $a = 0;
        echo "0 ";
        var_dump( (bool)$a);
        // Результат false т.к. число равно 0.
        echo '<br>';
        $a = -20;
        echo "-20 ";
        var_dump( (bool)$a);
        // Результат true т.к. число не равно 0.

        echo '<br>';
        echo 'Первый способ вывода текста';
        $a='Второй способ вывода текста';
        echo '<br>';
        print_r($a);
        $a='Третий способ вывода текста';
        echo '<br>';
        var_dump($a);

        echo '<br>';

        // Комментарий первого типа
        /*
            Комментарий второго типа
        */
        # Комментарий третьего тима - редкий


        // Полная запись
        /*
         <?php

         ?>
        */
        // Тег <?= доступен всегда, вне зависимости от настройки short_open_tag.

        define('DAYS_COUNT',7);
        const MONTH_COUNT=12;





?>