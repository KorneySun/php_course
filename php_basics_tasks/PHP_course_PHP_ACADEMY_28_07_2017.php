<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP course</title>
</head>
<body>
    <?='Hello, Dima';?>
    <?php
      echo 'Hello, world!';



    echo '<br>';
    $myArray = array('Россия'=>'Москва', 'Испания'=>'Мадрид','Дания'=>'Копенгаген','Чехия'=>'Прага','Словакия'=>'Братислава',);
    $mArray = array('Россия','Испания','Дания','Чехия','Словакия',);
    echo '<br>';
    print_r($myArray);
    echo '<br>';
    print_r($mArray);

    echo '<pre>';
        print_r($myArray);
        print_r($mArray);
    echo '</pre>';

    echo '<br>';

    $Book_1 = array('Style'=>'Фантастика', 'Author'=>'Беляев','Name'=>'Голова','Price'=>'50');
    $Book_2 = array('Style'=>'Проза', 'Author'=>'Лондон','Name'=>'Пират','Price'=>'70');
    $Book_3 = array('Style'=>'Лирика', 'Author'=>'Пушкин','Name'=>'Сказки','Price'=>'100');
    $Goods=array($Book_1,$Book_2,$Book_3);
    echo '<pre>';
    print_r($Goods);
    echo '</pre>';
    define('RUSSIA', 'Russia');
    define('USA', 'USA');
    define('DENMARK', 'Denmark');
    define('FINLAND', 'Finland');
    define('GREECE', 'Greece');
    $Country_Array=array(RUSSIA,USA,DENMARK,FINLAND,GREECE);
    echo '<pre>';
    print_r($Country_Array);
    echo '</pre>';

    $myVar = 'hey';

    $hey = 'bro';

    $bro = 'dru';

    $dru = 'pry';

    $pry = 'Hello';


    echo $hey;
    echo '<br>';
    echo $$hey;
    echo '<br>';
    echo $$$hey;
    echo '<br>';
    echo $$$$hey;
    echo '<br>';

    echo $$$$$myVar; // Hello, variable )





    ?>








</body>
</html>