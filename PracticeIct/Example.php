<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Example</title>
</head>

<body>
    <h1>PHP Example</h1>
    <form action="Connect.php" method="POST">  
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter your name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter your Email" required>

        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" placeholder="Enter your phone number" required>

        <label for="address">Address:</label>
        <input type="text" name="address" placeholder="Enter your address" required>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
