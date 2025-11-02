<?php
$a = 10;
$b = 5;
$operator = '+'; 

switch ($operator) {
    case '+':
        echo $a + $b;
        break;
    case '-':
        echo $a - $b;
        break;
    case '*':
        echo $a * $b;
        break;
    case '/':
        echo $a / $b;
        break;
    case '%':
        echo $a % $b;
        break;
    default:
        echo "Invalid operator";
}
?>

