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

//Задача. В переменной $date лежит дата в формате
// '31-12-2030'. Преобразуйте эту дату в формат '31.12.2030'.
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
//$str = 'LONDON';
//$str = ucfirst(strtolower($str));
//echo $str;

//Дана строка 'html css php'. Найдите количество символов в этой строке.
//$str =  'html css php';
//$noSpaceStr = explode(' ', $str);
//$noSpaceStr = implode($noSpaceStr);
//echo strlen($noSpaceStr);
//Дана переменная $password, в которой хранится пароль пользователя. Если количество символов пароля больше 5-ти
//и меньше 10-ти, то выведите пользователю сообщение о том, что пароль подходит, иначе сообщение о том, что нужно придумать другой пароль.
//$password = 'gregr';
//$passwordLength = strlen($password);
//if ($passwordLength > 5 && $passwordLength < 10) {
//    echo "Password is correct";
//} else echo "Input another password";
//Работа с substr
//Для решения задач данного блока вам понадобятся следующие функции: substr.
//Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
//
//$str = 'html css php';
//$str1 = substr($str,0,4);
//$str2 = substr($str,5,3);
//$str3 = substr($str,8);
//echo $str1." \n".$str2."\n".$str3."\n" ;

//Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.
//$str = 'html css php';
//echo substr($str,-3,3);
//Дана строка. Проверьте, что она начинается на 'http://'. Если это так, выведите 'да', если не так - 'нет'.
//$str = 'http://html/css/php';
//$pattern = 'http://';
//if (strstr($str,$pattern)||strstr($str,$pattern) === 0) {
//    echo "yes";
//} else {
//    echo "No";
//}

//Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'. Если это так, выведите 'да', если не так - 'нет'.
//$str = 'https://html/css/php';
//$pattern = 'http://';
//$pattern2 = 'https://';
//if (strstr($str,$pattern)||
//    strstr($str,$pattern) === 0
//    || strstr($str,$pattern2)
//    || strstr($str,$pattern2) === 0) {
//    echo "yes";
//} else {
//    echo "No";
//}
//Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.
//$str = 'https://html/css/kotik.png';
//$pattern ='.png';
//if(substr($str,-4,4) === $pattern) {
//    echo "this is PNG";
//} else echo "not PNG";
//Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg'. Если это так, выведите 'да', если не так - 'нет'.
//
//$str = 'https://html/css/kotik.jpg';
//$pattern ='.png';
//$pattern2 ='.jpg';
//if(substr($str,-4,4) === $pattern ||
//    substr($str,-4,4) === $pattern2) {
//    echo "this is YES";
//} else echo "NO";

//Дана строка. Если в этой строке более 5-ти символов - вырежите из нее первые 5 символов, добавьте троеточие в конец и
//выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.
//
//$str = 'https://html/css/kotik.jpg';
//$strLength = strlen($str);
//if ($strLength > 5 ) {
//   $resultStr =  substr($str,0,5)."...";
//   echo $resultStr;
//}else {
//echo $str; }


//Работа с str_replace
//Для решения задач данного блока вам понадобятся следующие функции: str_replace.
//Дана строка '31.12.2013'. Замените все точки на дефисы.
//$str = '31.12.2013';
//$strResult = str_replace(".","-",$str);
//echo $strResult;

//Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
//$str = '1a2b3c4b5d6e7f8g9h0';
//$strResult = str_replace(['a','b','c'],[1,2,3],$str);
//echo $strResult;

// Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'.
//$str = '1a2b3c4b5d6e7f8g9h0';
//$strResult = str_replace(['1','2','3','4','5','6','7','8','9','0'],"",$str); ///reqexp better (((
//echo $strResult;


//Работа с strtr
//Для решения задач данного блока вам понадобятся следующие функции: strtr.
//Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3. Решите задачу двумя способами
// работы с функцией strtr (массив замен и две строки замен).
//$str = '1a2b3c4b5d6e7f8g9h0';
////$strResult = strtr($str,['a'=>'1','b'=>'2','c'=>'3']);
//$strResult = strtr($str,'123','abc');
//echo $strResult;

//Работа с substr_replace
//Для решения задач данного блока вам понадобятся следующие функции: substr_replace.
//Дана строка $str. Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте '!!!'.
//$str ="santa Clasus good old man";
//$strResult = substr_replace($str,"!!!",2,"6");
//echo $strResult;



//Работа с strpos, strrpos
//Для решения задач данного блока вам понадобятся следующие функции: strpos, strrpos.
//Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'.
//$str = 'abc abc abc';
//echo strpos($str,'b')."\n";
//Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
//echo  strrpos($str,'b')."\n";
//Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b', если начать поиск не с начала строки, а с позиции 3.
//echo strpos($str,"b",'2');

// Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.
//$str = 'aaa aaa aaa aaa aaa';
//$firstSpacePosition = strpos($str," ");
//$secondSpacePosition = $firstSpacePosition + (strpos( $str," ",$firstSpacePosition)+1);
//echo $secondSpacePosition;

//Проверьте, что в строке есть две точки подряд. Если это так - выведите 'есть', если не так - 'нет'.
//$str = "asdasd ewfwe ..";
//if (substr_count($str,"..")) {
//    echo "yes indeed";
//} else {
//    echo "no"; }



//Проверьте, что строка начинается на 'http://'. Если это так - выведите 'да', если не так - 'нет'.
//$str = 'http://';
//if ( (strpos($str,"http://")) ===0 ) {
//    echo "yes";
//} else {
//    echo "no";
//}
//Работа с explode, implode
//Для решения задач данного блока вам понадобятся следующие функции: explode, implode.
//Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
//$str = "html css php salo sobaka  kapusta";
//$arr = explode(" ",$str);
//print_r($arr);

//Дан массив с элементами 'html', 'css', 'php'. С помощью функции
// implode создайте строку из этих элементов, разделенных запятыми.
//$str2 = implode(',',$arr);
//echo $str2;

//В переменной $date лежит дата в формате '2013-12-31'. Преобразуйте эту дату в формат '31.12.2013'.
//$date = '2013-12-31';
//$arr = explode("-", $date);
//$str = implode(".",array_reverse($arr));
//echo $str;

//Работа с str_split
//Для решения задач данного блока вам понадобятся следующие функции: str_split.
//Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.

//$str = '1234567890';
//print_r ( str_split($str,2));

//Дана строка '1234567890'. Разбейте ее на массив с
// элементами '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.
//$str = '1234567890';
//str_split($str,1);

//Работа с trim, ltrim, rtrim
//Для решения задач данного блока вам понадобятся
// следующие функции: trim, ltrim, rtrim.
//Дана строка. Очистите ее от концевых пробелов.
//$str = " ewlwelewl wlelwe ";
//echo trim($str);
//Дана строка '/php/'. Сделайте из нее строку 'php', удалив
// концевые слеши.


//$str = '/php/';
//echo trim($str, '/');

//Дана строка 'слова слова слова.'.
// В конце этой строки может быть точка, а может и не быть.
// Сделайте так, чтобы в конце этой строки
// гарантировано стояла точка. То есть: если этой
// точки нет -
// ее надо добавить, а если есть - ничего не делать.
// Задачу решите через rtrim без всяких ифов.
//$str = 'слова слова слова';
//echo rtrim($str,'.').".";



//Работа с strrev
//Для решения задач данного блока вам понадобятся
// следующие функции: strrev.
//Дана строка '12345'. Сделайте из нее строку '54321'.
//Проверьте, является ли слово палиндромом
// (одинаково читается во всех направлениях,
//примеры таких слов: madam, otto, kayak, nun, level).
//$str = '12345';
//echo ($strRevers = strrev($str));
$str = "madam, otto, kayak, nuen, level";
$str = str_replace(" ", "", $str);
$arr = explode(",", $str);
//
//foreach ($arr as &$value) {
//    if ($value ===strrev($value)) {
//        $value =  $value. " ___ palindrom";
//    } else {
//        $value = $value. " bulshit ";
//    }
//}
//print_r($arr);
//Работа с str_shuffle
//Для решения задач данного блока
// вам понадобятся следующие функции: str_shuffle.
//Дана строка. Перемешайте символы этой строки в случайном порядке.
//$str = 'regasd342        42bby  ur';
//echo "<p>".(str_shuffle($str))."<p>";
//Создайте строку из 6-ти случайных маленьких
// латинских букв так, чтобы буквы
// не повторялись.
//$str = str_shuffle("abcdef");
//echo $str;
//Нужно сделать так, чтобы в нашей
// строке могла быть любая латинская буква,
// а не ограниченный набор.
//$str = "qwertyuioplkjhgfdsazxcvbnm";
//$str= str_shuffle($str);
//echo substr($str, 0, 6);
//
//Работа с str_repeat
//Для решения задач данного блока вам понадобятся следующие функции: str_repeat.
//Нарисуйте пирамиду, как показано на рисунке, только у вашей
// пирамиды должно быть 9 рядов,//а не 5. Решите задачу с помощью одного цикла и функции str_repeat.
for($i = 1; $i < 10; $i++ ){
    echo  str_repeat($i, $i).'<br>';
}
