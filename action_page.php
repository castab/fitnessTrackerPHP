<?php
// The only purpose of this page is to 'catch' the values of
// items being passed through POST and view them

// For debugging purposes

session_start();
print_r($_POST);

echo $_SESSION['from']; // Returns The PHP File Name where action.php is being called from

$_SESSION = array(); // Empty the contents of session
?>