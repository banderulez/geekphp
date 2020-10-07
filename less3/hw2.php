<?php
$a = 0;

do {
    if ($a == 0) {
        echo "$a - ноль<br/>";
        $a++;
    }
    elseif ($a%2 == 0){
        echo "$a - четное число<br/>";
        $a++;
    }
    elseif ($a%2 !=0){
        echo "$a - нечетное число<br/>";
        $a++;
        }
    }
while ($a<=10);


