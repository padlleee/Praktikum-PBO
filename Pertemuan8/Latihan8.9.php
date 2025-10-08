<?php
// Define a custom exception class
class customException extends Exception {
    public function errorMessage() {
        // Error message
        $errorMsg = 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
            . ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail address';
        return $errorMsg;
    }
}

$email = "someone@example...com";

try {
    // Check if the email is valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        // Throw exception if email is not valid
        throw new customException($email);
    }
} catch (customException $e) {
    // Display custom error message
    echo $e->errorMessage();
}
?>