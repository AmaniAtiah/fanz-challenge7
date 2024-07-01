
<?php

// Function to check if a string is a palindrome
function isPalindrome($str)
{
    // Remove spaces, punctuation, and convert to lowercase

    $str = strtolower(preg_replace('/[^a-z0-9]/', '', $str));

    // Compare the original string with its reversed version
    return $str === strrev($str);
}



?>