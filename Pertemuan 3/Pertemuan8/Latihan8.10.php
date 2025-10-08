<?php
class customException extends Exception {
    public function errorMessage() {
        // Error message
        $errorMsg = 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
            . ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail address';
        return $errorMsg;
    }
}

$email = "someone@example.com";

try {
    // Check if email is valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        throw new customException($email);
    }

    // Check for "example" in email address
    if (strpos($email, "example") !== FALSE) {
        throw new Exception("$email is an example e-mail");
    }
} catch (customException $e) {
    echo $e->errorMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>