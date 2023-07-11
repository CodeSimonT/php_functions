<?php
// number 1
echo "Number 1 <br>";
function isVowel($char) {
    $vowels = array('a', 'e', 'i', 'o', 'u');

    // Convert the character to lowercase for case-insensitive comparison
    $char = strtolower($char);

    // Check if the character is present in the array of vowels
    if (in_array($char, $vowels)) {
        return true; // It's a vowel
    } else {
        return false; // It's a consonant
    }
}

$character = 'a';
if (isVowel($character)) {
    echo "$character is a vowel.";
} else {
    echo "$character is a consonant.";
}
echo "<br> <br>";

// number 2
echo "Number 2 <br>";
function convertDigitToWord($number) {
    // Define an array with word counterparts for digits
    $digitWords = array(
        0 => 'Zero',
        1 => 'One',
        2 => 'Two',
        3 => 'Three',
        4 => 'Four',
        5 => 'Five',
        6 => 'Six',
        7 => 'Seven',
        8 => 'Eight',
        9 => 'Nine'
    );

    // Convert the number to a string
    $numberString = strval($number);

    // Iterate over each digit and convert it to its word counterpart
    $wordCounterpart = '';
    for ($i = 0; $i < strlen($numberString); $i++) {
        $digit = intval($numberString[$i]);

        // Check if the digit is valid
        if (array_key_exists($digit, $digitWords)) {
            $wordCounterpart .= $digitWords[$digit] . ' ';
        }
    }

    // Remove any trailing whitespace
    $wordCounterpart = trim($wordCounterpart);

    return $wordCounterpart;
}

// Example usage
$number = 721;
$wordCounterpart = convertDigitToWord($number);
echo $wordCounterpart;  // Output: Seven Two One
echo "<br><br>";

// number 3
echo "Number 3 <br>";
function isDivisibleByThree($divisible) {

    if ($divisible % 3 === 0) {
        return true;
    } else {
        return false;
    }
}


$divisibleNumber = 15;
if(isDivisibleByThree($divisibleNumber)) {
    echo $divisibleNumber . "the number is divisible";
} else {
    echo $divisibleNumber . "the number is not divisible";
}

echo "<br><br>";

// number 4
echo "Number 4 <br>";
function deleteRecurringElements($sortedList) {
    // Initialize an empty result array
    $result = array();

    // Iterate over each element in the sorted list
    $previousElement = null;
    foreach ($sortedList as $element) {
        // Check if the current element is different from the previous element
        if ($element !== $previousElement) {
            $result[] = $element; // Add the element to the result array
        }
        
        // Update the previous element
        $previousElement = $element;
    }

    return $result;
}

// Example usage
$sortedList = array("apple", "apple", "banana", "banana", "banana", "orange", "peach", "peach");
$uniqueList = deleteRecurringElements($sortedList);
print_r($uniqueList);


echo "<br><br>";

// number 5
echo "Number 5 <br>";

function isArmstrongNumber($number) {
    // Convert the number to a string
    $numberString = strval($number);

    // Calculate the number of digits
    $numDigits = strlen($numberString);

    // Initialize a variable to store the sum of the cubes of digits
    $sum = 0;

    // Iterate over each digit in the number
    for ($i = 0; $i < $numDigits; $i++) {
        $digit = intval($numberString[$i]);

        // Add the cube of the digit to the sum
        $sum += pow($digit, $numDigits);
    }

    // Check if the sum is equal to the original number
    if ($sum === $number) {
        return true; // The number is an Armstrong Number
    } else {
        return false; // The number is not an Armstrong Number
    }
}

// Example usage
$number = 153;
if (isArmstrongNumber($number)) {
    echo $number . ' is an Armstrong Number.';
} else {
    echo $number . ' is not an Armstrong Number.';
}


?>