<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FacLog</title>
</head>
<body>
<?php

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "sjm");

// Check if the entered password is in the database
$username = $_POST["username"];
$password = $_POST["password"];
$sql = "SELECT * FROM Faculty WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

// If the password is found in the database, return true
if (mysqli_num_rows($result) > 0) {
    echo "true";
    $url = 'http://localhost/SJMIT/HTML/FacNotes.html';
    $linkText = 'Add Notes';
    echo "<a href='$url'>$linkText</a> <br>";
} else {
    // If the password is not found in the database, return false
    echo "Please enter valid user id and password";
}

// Close the connection to the database
mysqli_close($conn);

?>

</body>
</html>