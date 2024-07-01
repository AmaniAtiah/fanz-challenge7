<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Palindrome Check</h1>

            <?php
            include 'palindrome.php';
            $str = "meem";
            if(isPalindrome($str)) {
                echo "<p class='result'>$str is a palindrome.</p>";
            } else {
                echo "<p class='result'>$str is not a palindrome.</p>";
            }
            ?>
        </div>
    </div>
</body>

</html>