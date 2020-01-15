<?php
//Дана строка 'minsk'. Сделайте из нее строку 'MINSK'.
//$str = 'minsk';
//echo strtoupper($str);  // to upper case

//Дана строка 'минск'. Сделайте из нее строку 'МИНСК'
//$str = 'минск';
//echo mb_strtoupper($str);

//Задача. Дана строка 'MINSK'. Сделайте из нее строку 'Minsk'.

//$str = 'minsk';
//echo ucfirst((strtolower($str)));

//Задача. В переменной $date лежит дата в формате '31-12-2030'. Преобразуйте эту дату в формат '31.12.2030'.
//$date = '31-12-2030';
//$str = explode( '-',$date );
//$strResult  = implode('.',$str);
//echo $strResult;

//Дана строка 'php'. Сделайте из нее строку 'PHP'.
//$str = 'php';
//$str = strtoupper($str);
//echo $str;
//Дана строка 'PHP'. Сделайте из нее строку 'php'.
//$str = 'PHP';
//$str = strtolower($str);
//echo $str;

//Дана строка 'london'. Сделайте из нее строку 'London'.
//$str = 'london';
//$str = ucfirst($str);
//echo $str;
//Дана строка 'London'. Сделайте из нее строку 'london'.
//$str = 'London';
//$str = lcfirst($str);
//echo $str;
//Дана строка 'london is the capital of great britain'

//Сделайте из нее строку 'London Is The Capital Of Great Britain'.
//$str = 'london is the capital of great britain';
//$str = ucwords($str);
//echo $str;
//Дана строка 'LONDON'. Сделайте из нее строку 'London'.
$str = 'LONDON';
$str = ucfirst(strtolower($str));
echo $str;