<?php

// Custom exception class
class EmailValidationException extends Exception {}

function validateEmail($email) {
    // Check if email contains 'lab4' or 'lab5'
    if (strpos($email, 'lab4') === false && strpos($email, 'lab5') === false) {
        throw new EmailValidationException("$email tidak mengandung kata 'lab4/lab5'");
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new EmailValidationException("$email tidak valid E-Mail address");
    }

    return true;
}

// Array of emails to validate
$emails = [
    "lab4@polsub.ac.id",
    "lab5@polsub.ac.id",
    "someone@example.com",
    "lab4lab5@polsub.ac.id",
    "invalid-email",
];

$validCount = 0;
$invalidCount = 0;

foreach ($emails as $email) {
    try {
        if (validateEmail($email)) {
            echo "$email mengandung kata 'lab4' dan E-mail valid<br>";
            $validCount++;
        }
    } catch (EmailValidationException $e) {
        echo $e->getMessage() . " dan tidak valid<br>";
        $invalidCount++;
    }
}

echo "<br>Terdapat $validCount email yang valid dan $invalidCount email yang tidak valid.";

?>