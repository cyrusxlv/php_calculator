<?php
// Define the variables
$num1 = 10;         // You can change this to any number
$operator = "*";    // You can change this to +, -, *, or /
$num2 = 5;          // You can change this to any number

// Check the operator and perform the calculation
if ($operator == "+") {
    $result = $num1 + $num2;
    echo "The result of $num1 + $num2 is $result";
} 
else if ($operator == "-") {
    $result = $num1 - $num2;
    echo "The result of $num1 - $num2 is $result";
} 
else if ($operator == "*") {
    $result = $num1 * $num2;
    echo "The result of $num1 * $num2 is $result";
} 
else if ($operator == "/") {
        $result = $num1 / $num2;
        echo "The result of $num1 / $num2 is $result";
} 
else {
    echo "Invalid operator.";
}
?>