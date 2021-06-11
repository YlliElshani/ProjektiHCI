<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - Tickets</title>
    <link rel="stylesheet" href="../style/login.css" type="text/css">
</head>
<body>
    <?php 
        include('../reusableCode/header.php');
    ?>
    <div class="main">
        <div class="form">
            <form action="../logicComponents/loginVerify.php" method="post" onsubmit="return loginValidimi()">
                <label id="login">Log In</label>
                <label>Email:</label>
                <input name='email' type="text">
                <label>Password:</label>
                <input name='password' type="password">
                <input name="login-btn" class="submit" type="submit" value="Log In">
                <label id="sign">Don't have an account?</label>
                <a href="signup.php">Sign Up</a>
            </form>
        </div>
    </div>
    <?php 
        include('../reusableCode/footer.php');
    ?>
    <script src="../js/main.js"></script>
</body>
</html>