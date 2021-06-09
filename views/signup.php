<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - Tickets</title>
    <link rel="stylesheet" href="../style/signup.css" type="text/css">
</head>
<body>
    <?php 
        include('../reusableCode/header.php');
    ?>
    <form action="action_page.php" style="border:1px solid #ccc">
      <div class="container">
        <h1>Sign Up</h1>
        <div class="row">
          <div class="column">
            <form id="mainForm" action="">
              <label for="firstname"><b>First Name</b></label>
              <input type="text" placeholder="Enter First Name" name="firstname" required>

              <label for="lastname"><b>Last Name</b></label>
              <input type="text" placeholder="Enter Last Name" name="lastname" required>

              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>

              <label for="psw-repeat"><b>Repeat Password</b></label>
              <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

              <label for="creditcard"><b>Credit Card No</b></label>
              <input type="text" placeholder="Enter Credit Card No" name="creditcard" required>

              <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
              </label>


              <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </form>
    <?php 
        include('../reusableCode/footer.php');
    ?>
</body>
</html>