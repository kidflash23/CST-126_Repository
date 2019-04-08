<?php

// define variables and set to empty values
$name = $email =$birthday = $comment = $gender =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $birthday = test_input($_POST["birthday"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<?php
echo "<h2>Input Information:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $birthday;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>