<?php
//Задача1 . Создайте переменную $var и присвойте ей значение 'hello'. Обращаясь
//к отдельным символам этой строки выведите на экран символ 'h', символ 'e', символ 'o'.
$var = 'hello';
echo "$var[0]$var[1]$var[2]$var[3]$var[4] <br>";  // stupid method
for($i = 0; $i <= ( strlen( $var )-1 ); $i++) {   // little bit better method
    echo "$var[$i]";
}
echo "<br>";
$var = array($var);       //  don`t know is it work without сast to array, probably no! ?
foreach ( $var as $item ) {
    echo "$item";
}


