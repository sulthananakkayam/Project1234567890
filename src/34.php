<?php
// Example PHP code to demonstrate basic operations

// Function to add two numbers
function sumNumbers($a, $b) {
    return $a + $b;
}

// Function to multiply two numbers
function multiplyNumbers($a, $b) {
    return $a * $b;
}

// Main function
echo "Enter first number: ";
$firstNumber = $_GET['num1'];
echo "Enter second number: ";
$secondNumber = $_GET['num2'];
$result = sumNumbers($firstNumber, $secondNumber);
echo "Sum of the numbers is: " . $result;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Example POST data
    $data = [
        'operation' => $_POST['operation'],
        'number1'   => $_POST['num1'],
        'number2'   => $_POST['num2']
    ];
    
    switch ($data['operation']) {
        case 'add':
            $result = sumNumbers($firstNumber, $secondNumber);
            echo "The result of adding the numbers is: " . $result;
            break;

        case 'multiply':
            $result = multiplyNumbers($firstNumber, $secondNumber);
            echo "The result of multiplying the numbers is: " . $result;
            break;

        default:
            echo "Invalid operation. Please choose an operation from add or multiply.";
    }
}
?>
