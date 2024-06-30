<?php
$error_message = ""; // Initialize $error_message here
$username = ""; // Define $username with a default empty value
$password = ""; // Define $password with a default empty value

if (isset($_POST["submit"])) {
    $username = htmlentities(strip_tags(trim($_POST["username"])));
    $password = htmlentities(strip_tags(trim($_POST["password"])));

    if (empty($username)) {
        $error_message .= "- Username belum diisi <br>";
    }
    if (empty($password)) {
        $error_message .= "- Password belum diisi <br>";
    }

    // Proceed only if there are no errors
    if (empty($error_message)) {
        include("db_connection.php");

        // Prepare the query using placeholders
        $query = "SELECT * FROM admin WHERE username = :username";
        $stmt = $conn->prepare($query);

        // Bind the values to the placeholders
        $stmt->bindParam(':username', $username);

        // Execute the query
        $stmt->execute();

        // Fetch the result (if needed)
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if there's a match
        if ($result && password_verify($password, $result['password'])) {
            // Successful login
            session_start();
            $_SESSION["username"] = $result["username"];
            header("Location: admin.php");
            exit(); // Don't forget to exit after redirecting
        } else {
            // Login failed
            $error_message .= "- Username dan/atau Password tidak sesuai";
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login Form</title>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <?php
        if ($error_message !== "")
            echo "<div class='error'>$error_message</div>";
        ?>
        <form action="login.php" method="POST">
            <div class="user-box">
            <input type="text" name="username" id="username" value="<?php echo $username ?? ''; ?>">
                <label for="">Username</label>
            </div>
            <div class="user-box">
            <input type="password" name="password" id="password" value="<?php echo $password ?? ''; ?>">
                <label for="">Password</label>
            </div>
            <!-- <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </a> -->
            <div class="buttonss">
                <input type="submit" id="submit" name="submit" value="Log In"> 
                <a href="index.php" class="guest-link">Guest</a>
            </div>
        </form>
    </div>
</body>
</html>


