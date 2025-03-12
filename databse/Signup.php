<?php 
$pagename = "Sign Up";
echo "<h4>$pagename</h4>";

echo "<form method='post' action='signup_process.php'>";
echo "<table>";
echo "<tr><td>First Name:</td><td><input type='text' name='r_firstname'></td></tr>";
echo "<tr><td>Last Name:</td><td><input type='text' name='r_lastname'></td></tr>";
echo "<tr><td>Address:</td><td><input type='text' name='r_address'></td></tr>";
echo "<tr><td>Postcode:</td><td><input type='text' name='r_postcode'></td></tr>";
echo "<tr><td>Tel No:</td><td><input type='text' name='r_telno'></td></tr>";
echo "<tr><td>Email:</td><td><input type='email' name='r_email'></td></tr>";
echo "<tr><td>Password:</td><td><input type='password' name='r_password1'></td></tr>";
echo "<tr><td>Confirm Password:</td><td><input type='password' name='r_password2'></td></tr>";
echo "<tr><td><input type='submit' value='Sign Up'></td><td><input type='reset' value='Clear Form'></td></tr>";
echo "</table>";
echo "</form>";
?>



