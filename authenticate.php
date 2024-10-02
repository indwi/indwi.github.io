<?php
session_start(); // Start a session to store user information

// Hardcoded username and password (for demonstration purposes)
$valid_username = "user"; // Replace with your valid username
$valid_password = "password"; // Replace with your valid password

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple authentication check
    if ($username === $valid_username && $password === $valid_password) {
        // Successful login
        $_SESSION['loggedin'] = true; // Set a session variable
        $_SESSION['username'] = $username; // Store username in session
        header("Location: home.html"); // Redirect to a protected page
        exit;
    } else {
        // Invalid credentials
        $error_message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - indi's shop</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFFFFF;
            color: #4A4A4A;
            text-align: center;
            padding: 2rem;
        }
        .error {
            color: red; /* Error message color */
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <h1>login</h1>

    <?php if (isset($error_message)): ?>
        <div class="error"><?php echo $error_message; ?></div>
    <?php endif; ?>

    <form action="authenticate.php" method="post">
        <label for="username">username</label>
        <input type="text" id="username" name="username" required>

        <label for="password">password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">log in</button>
    </form>
</body>
</html>
