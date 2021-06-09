<div class="header">
    <div class="left-header">
        <ul>
            <li><a href="index.php"><strong>E - Tickets</strong></a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Movies</a></li>
            <li><a href="contactUs.php">Contact Us</a></li>
            <li><a href="details.php">Movie Details</a></li>
        </ul>
    </div>
    <div class="right-header">
        <ul>
            <li><a href="login.php">LogIn</a></li>
            <li><a href="signup.php">SignUp</a></li>
        </ul>
    </div>
</div>
<style>
    .header{
        display: flex;
        justify-content: space-between;
        padding:20px;
        background-color: #141032;
    }

    .right-header ul, .left-header ul, .box2 ul {
        display: flex;
        list-style-type: none;
    }

    .right-header ul li, .left-header ul li{
        margin-left:50px;
        margin-right: 50px;
    }

    .right-header ul li a, .left-header ul li a{
        text-decoration: none;
    }
</style>