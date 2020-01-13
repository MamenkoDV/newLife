<?php
//Задача. Дан массив с элементами 'Привет, ', 'мир' и '!'. Необходимо вывести
//на экран фразу 'Привет, мир!'.
$array = ["Hello","world","!"];
echo "$array[0] $array[1] $array[2] <br>";

// task 1.6.2 //
//Задача. Решим немного другую задачу: дан массив с элементами 'Привет, ', 'мир' и '!'. Необходимо
//записать в переменную
//$text фразу 'Привет, мир!', а затем вывести на экран содержимое
//этой переменной.

$text = "$array[0] $array[1] $array[2]";
echo "$text <br>"  ;

//Задача. Дан массив ['Привет, ', 'мир', '!']. Необходимо записать в первый элемент (то есть элемент с номером
//ноль) этого массива слово 'Пока, ' (то есть вместо слова 'Привет, ' будет 'Пока, ').
$array[0] = "Good Bye";
echo  var_dump($array);
echo  "<br>";
//Задача. Создайте массив заработных плат $arr. Выведите на экран зарплату Пети и Коли.
$salary =  ['georg' => '1000$' , 'Petr' => '2000$' , 'Kolya' => '3$'];
$peterSalary = $salary['Petr'];
echo " $peterSalary <br>" ;
echo $salary['Kolya'] ;
echo  "<br>";
///////////////////////////////////
//Задача. Дан многомерный массив $arr:
//Выведите с его помощью слово 'голубой'.
/*
$arr = [
    'ru'=>['голубой', 'красный', 'зеленый'],
    'en'=>['blue', 'red', 'green'],
];

print_r ($arr['ru'] [0] );
echo  "<br>";
echo $arr['ru'] [1] ;
*/


//Создайте массив $arr с элементами 2, 5, 3, 9. Умножьте первый элемент массива на второй, а третий элемент
//на четвертый. Результаты сложите, присвойте переменной $result. Выведите на экран значение этой переменной.
//Работа с массивами
// Создайте массив $arr=['a', 'b', 'c']. Выведите значение массива на экран с помощью функции var_dump().
$arr = ['a', 'b', 'c'];
echo "<pre>";
echo var_dump($arr);
echo "</pre>";

//С помощью массива $arr из предыдущего номера выведите на экран содержимое первого, второго и третьего элементов.
//echo $arr[0].$arr[1],$arr[2];

//Создайте массив $arr=['a', 'b', 'c', 'd'] и с его помощью выведите на экран строку 'a+b, c+d'.
//
$arr = ['a', 'b', 'c','d'];
echo "$arr[0] + $arr[1], + $arr[2]+$arr[3] ";
echo '<br>';

//Создайте массив $arr с элементами 2, 5, 3, 9. Умножьте первый элемент массива на второй, а третий элемент
//на четвертый. Результаты сложите, присвойте переменной $result. Выведите на экран значение этой переменной.
$arr = [2, 5, 3, 9];
$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
echo $result;
//Заполните массив $arr числами от 1 до 5. Не объявляйте массив, а просто заполните его присваиванием $arr[] = новое значение.
$arr[0] = 1;
$arr[1] = 2;
$arr[2] = 3;
$arr[3] = 4;
$arr[4] = 5;
echo "<pre>";
echo var_dump($arr);
echo "</pre>";

//Ассоциативные массивы
// Создайте массив $arr. Выведите на экран элемент с ключом 'c'.
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr['c'];
//Создайте массив $arr. Найдите сумму элементов этого массива.

$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr['a']+$arr['b']+$arr['c'];
echo '<br>';
echo '<br>';
echo '<br>';


//
//Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели
//(понедельник - должен иметь ключ 1, вторник - 2 и т.д.). Выведите на экран текущий день недели.
//
//Пусть теперь номер дня недели хранится в переменной $day, например там лежит число 3.
//Выведите день недели, соответствующий значению переменной $day.
$days = ['1' =>'Monday',
         '2' =>'Tuesday',
         '3' =>'Wednesday',
         '4' =>'Thursday',
         '5' =>'Friday',
         '6' =>'Saturday',
         '7' =>'Sunday', ];
echo $days['1'];
$day = 3;
echo $days[$day];

echo '<br>';
echo '<br>';
//Создайте многомерный массив $arr. С его помощью выведите на экран слова 'joomla', 'drupal', 'зеленый', 'красный'.

$arr = [
    'cms'=>['joomla', 'wordpress', 'drupal'],
    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];

echo $arr['cms'] [0];
echo '<br>';
echo $arr['cms'] [2];
echo '<br>';
echo $arr ['colors'] ['green'];
echo '<br>';
echo $arr ['colors'] ['red'];
echo '<br>
/////////////////////////////////////////////////////////////<br>';


//Создайте двухмерный массив. Первые два ключа - это 'ru' и 'en'.
//Пусть первый ключ содержит элемент, являющийся массивом названий
//дней недели по-русски, а второй - по-английски.
//Выведите с помощью этого массива понедельник по-русски и
//среду по английски (пусть понедельник - это первый день).
$weekArray = [
    'ru' => [1=>'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'],
    'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
];
 echo $weekArray['ru'] [1];
echo '<br>';
echo $weekArray['en'] [2];
echo '<br>';
$day = 3;
$lang = 'ru';

echo $weekArray[$lang] [$day];