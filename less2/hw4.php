<?php
function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case (sum):
            return $result=$arg1 + $arg2;
            echo $result;
            break;
        case (dif):
            return $result= $arg1 - $arg2;
            echo $result;
            break;
        case (com):
            return $result= $arg1 * $arg2;
            echo $result;
            break;
        case (div):
            return $result= $arg1 / $arg2;
            echo $result;
            break;

    }

}
$result = mathOperation(2, 3, sum);
echo $result;