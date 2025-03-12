<?php
session_start();
include("db.php");

$pagename = "Sign Up Results";
echo "<h4>$pagename</h4>";

mysqli_report(MYSQLI_REPORT_OFF);

$fname = trim($_POST['r_firstname']);
$lname = trim($_POST['r_lastname']);
$address = trim($_POST['r_address']);
$postcode = trim($_POST['r_postcode']);
$telno = trim($_POST['r_telno']);
$email = trim($_POST['r_email']);
$password1 = trim($_POST['r_password1']);
$password2 = trim($_POST['r_password2']);

$reg = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

if (empty($fname) || empty($lname) || empty($address) || empty($postcode) || empty($telno) || empty($email) || empty($password1) || empty($password2)) {
    echo "<p><b>Sign-up failed!</b></p>";
    echo "<p>All fields are required. <a href='signup.php'>Go back</a></p>";
} elseif ($password1 !== $password2) {
    echo "<p><b>Sign-up failed!</b></p>";
    echo "<p>Passwords do not match. <a href='signup.php'>Go back</a></p>";
} elseif (!preg_match($reg, $email)) {
    echo "<p><b>Sign-up failed!</b></p>";
    echo "<p>Invalid email format. <a href='signup.php'>Go back</a></p>";
} else {
    $SQL = "INSERT INTO Users (userType, userFName, userSName, userAddress, userPostCode, userTelNo, userEmail, userPassword)
            VALUES ('C', '$fname', '$lname', '$address', '$postcode', '$telno', '$email', '$password1')";

    if (mysqli_query($conn, $SQL)) {
        echo "<p><b>Sign-up successful!</b></p>";
        echo "<p><a href='login.php'>Login</a></p>";
    } else {
        echo "<p><b>Sign-up failed!</b></p>";

        if (mysqli_errno($conn) == 1062) {
            echo "<p>Email already in use. <a href='signup.php'>Go back</a></p>";
        } elseif (mysqli_errno($conn) == 1064) {
            echo "<p>Invalid characters used. <a href='signup.php'>Go back</a></p>";
        } else {
            echo "<p>Unknown error. <a href='signup.php'>Go back</a></p>";
        }
    }
}
?>
