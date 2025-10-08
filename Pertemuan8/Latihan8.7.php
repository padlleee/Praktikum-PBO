<?php
// Create a function that throws an exception
function checkNum($number) {
    if ($number > 1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}

// Trigger the exception
checkNum(2);
?>