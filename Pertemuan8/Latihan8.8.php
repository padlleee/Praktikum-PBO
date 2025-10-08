<?php
// Create a function that throws an exception
function checkNum($number) {
    if ($number > 1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}

// Trigger the exception in a "try" block
try {
    checkNum(2);
    // If the exception is thrown, this text will not be displayed
    echo 'If you see this, the number is 1 or below';
} catch (Exception $e) {
    // Catch the exception and display the message
    echo 'Message: ' . $e->getMessage();
}
?>