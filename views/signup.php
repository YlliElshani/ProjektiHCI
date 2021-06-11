<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oriflame</title>
    <link rel="stylesheet" href="../style/signup.css">
</head>
<body>
    <?php 
        include('../reusableCode/header.php');
    ?>
  <div class="main">
      <form action="../logicComponents/registerVerify.php" method="post" onsubmit="return signUpValidimi()">        
          <label>Name</label>
          <input name='register-name' type="text" placeholder="Enter your firstname">
          <label>Last Name</label>
          <input name='register-lastname' type="text" placeholder="Enter your lastname">
          <label>Email</label>
          <input name='register-email' type="text" placeholder="Enter a valid email address">
          <label>Password</label>
          <input name='register-pass' type="password" placeholder="***********">
          <label>Credit Card number</label>
          <input name='register-ccNo' type="text" placeholder="Enter a valid credit card number">
          <input type="submit" id="submit" value="Register" name='register-btn'>
      </form>
  </div> 
  <?php 
        include('../reusableCode/footer.php');
  ?>    
  <script src="../js/main.js"></script>
</body>
</html>
