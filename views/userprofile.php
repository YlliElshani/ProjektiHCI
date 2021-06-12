<?php 
    session_start();
    include_once '../logicComponents/userMapper.php';
    if (isset($_GET['id'])) {
        $userId = $_GET['id'];
        $mapper = new UserMapper();
        $user = $mapper->getUserByID($userId);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - Tickets</title>
    <link rel="stylesheet" href="../style/userprofile.css" type="text/css">
</head>

<body>
    <?php 
        include('../reusableCode/header.php');
    ?>
    <div class="first-main">
        <div class="logo">
            <img src="../media/userprofile.png">
        </div>
            <form class="personal-data" method="get" action="../logicComponents/editUser.php">
                <ul>
                    <ul>
                        <li>Name:</li>
                        <li>Last Name:</li>
                        <li>Email</li>
                        <li>Credit Card No:</li>
                    </ul>
                    <ul>
                        <li><?php echo $user['name']; ?></li>
                        <li><?php echo $user['lastname']; ?></li>
                        <li><?php echo $user['email']; ?></li>
                        <li><?php echo $user['ccNo']; ?></li>
                    </ul>
                </ul>
            </form>
        </div>
        <div class="second-main">
            <div class="content">
                <h3>Favourite Movies List:</h3>
                <ul style="list-style-type:none;">
                    <li>Tom and Jerry</li>
                    <li>Mortal Combat</li>
                    <li>Fast and Furious 6</li>
                    <li>Lady Business</li>
                    <li>To All The Boys</li>
                    <li>The Godfather</li>
                </ul>
            </div>

            <div class="container">
                <h3>Tickets Bought:</h3>
                <ul style="list-style-type:none;">
                    <li>To All The Boys</li>
                    <li>Lady Business</li>
                </ul>
            </div>
        </div>    
</body>

<footer class='footer'>
 <?php 
        include('../reusableCode/footer.php');
    ?>
 </footer>

</html>