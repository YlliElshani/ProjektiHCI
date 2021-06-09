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
    <div class="logo">
        <img src="../media/userprofile.png">
    </div>
    <div class="user">
        <ul style="list-style-type:none;">
            <li>Name:</li>
            <li>Last Name:</li>
            <li>Email</li>
            <li>Credit Card No:</li>
            <li>Lisa</li>
            <li>Durham</li>
            <li>lisa.durham@yahoo.com</li>
            <li>283634834343</li>
        </ul>
    </div>
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
    <?php 
        include('../reusableCode/footer.php');
    ?>
</body>
</html>