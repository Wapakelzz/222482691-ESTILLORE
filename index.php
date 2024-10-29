<?php
// Activity 1: Number Counter
function numberCounter() {
    echo "Activity 1: Number Counter\n";
    
    // Part 1: Print numbers from 1 to 10
    $i = 1;
    while ($i <= 10) {
        echo $i . " ";
        $i++;
    }
    echo "\n";

    // Part 2: Print even numbers from 1 to 20
    $i = 2;
    while ($i <= 20) {
        echo $i . " ";
        $i += 2;
    }
    echo "\n";
}

// Activity 2: Password Validator
function passwordValidator() {
    echo "Activity 2: Password Validator\n";
    do {
        $password = readline("Please enter the password: ");
        if ($password !== "password123") {
            echo "Incorrect password.\n";
        }
    } while ($password !== "password123");

    echo "Access Granted.\n";
}

// Activity 3: Multiplication Table
function multiplicationTable() {
    echo "Activity 3: Multiplication Table\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "7 x $i = " . (7 * $i) . "\n";
    }
}

// Activity 4: Loop Control with break and continue
function loopControl() {
    echo "Activity 4: Loop Control with break and continue\n";
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            continue;
        }
        if ($i == 8) {
            break;
        }
        echo $i . " ";
    }
    echo "\n";
}

// Activity 5: Sum of Numbers
function sumOfNumbers() {
    echo "Activity 5: Sum of Numbers\n";
    $sum = 0;
    $i = 1;

    while ($i <= 100) {
        $sum += $i;
        $i++;
    }

    echo "The sum of numbers from 1 to 100 is: $sum\n";
}

// Activity 6: Array Iteration with foreach
function arrayIteration() {
    echo "Activity 6: Array Iteration with foreach\n";
    $movies = ["The Shawshank Redemption", "Inception", "The Dark Knight", "Interstellar", "Parasite"];

    foreach ($movies as $index => $movie) {
        echo ($index + 1) . ". $movie\n";
    }
}

// Activity 7: Key-Value Pairs with foreach
function keyValuePairs() {
    echo "Activity 7: Key-Value Pairs with foreach\n";
    $student = [
        "Name" => "Alice",
        "Age" => 20,
        "Grade" => "A",
        "City" => "Baguio"
    ];

    foreach ($student as $key => $value) {
        echo "$key: $value\n";
    }
}

// Activity 8: Factorial Calculator
function factorialCalculator() {
    echo "Activity 8: Factorial Calculator\n";
    $number = 5; 
    $factorial = 1;

    for ($i = $number; $i > 0; $i--) {
        $factorial *= $i;
    }

    echo "Factorial of $number is: $factorial\n";
}

// Activity 9: FizzBuzz Challenge
function fizzBuzz() {
    echo "Activity 9: FizzBuzz Challenge\n";
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz ";
        } elseif ($i % 3 == 0) {
            echo "Fizz ";
        } elseif ($i % 5 == 0) {
            echo "Buzz ";
        } else {
            echo $i . " ";
        }
    }
    echo "\n";
}

// Activity 10: Prime Number Checker
function primeChecker() {
    echo "Activity 10: Prime Number Checker\n";
    $number = readline("Enter a number: ");
    $is_prime = true;

    if ($number < 2) {
        $is_prime = false;
    } else {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $is_prime = false;
                break;
            }
        }
    }

    if ($is_prime) {
        echo "$number is a prime number.\n";
    } else {
        echo "$number is not a prime number.\n";
    }
}

// Activity 11: Fibonacci Sequence
function fibonacciSequence() {
    echo "Activity 11: Fibonacci Sequence\n";
    $n1 = 0;
    $n2 = 1;
    $count = 0;

    echo "$n1 $n2 ";

    while ($count < 8) {
        $n3 = $n1 + $n2;
        echo "$n3 ";
        $n1 = $n2;
        $n2 = $n3;
        $count++;
    }
    echo "\n";
}

// Activity 12: Reverse a String
function reverseString() {
    echo "Activity 12: Reverse a String\n";
    $string = "Hello"; 
    $reversed = "";

    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }

    echo "Input: $string\n";
    echo "Output: $reversed\n";
}


numberCounter();
passwordValidator();
multiplicationTable();
loopControl();
sumOfNumbers();
arrayIteration();
keyValuePairs();
factorialCalculator();
fizzBuzz();
primeChecker();
fibonacciSequence();
reverseString();
?>
