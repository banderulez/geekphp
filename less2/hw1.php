<?php
function fun($a, $b)
{
    if ($a > 0 && $b > 0)
        echo $a - $b;
     else if ($a < 0 && $b < 0)
        echo($a * $b);
    else if ($a > 0 && $b < 0 || $a < 0 && $b > 0)
    echo ($a + $b);
}
$result = fun(10, 5);
echo $result;