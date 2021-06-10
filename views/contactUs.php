<!DOCTYPE html>
 <html>
 <head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details</title>
    <link rel="stylesheet" href="../style/contactUs.css" type="text/css">
    
 </head>
 <body>
 	<?php 
        include('../reusableCode/header.php');
    ?>

	<div class='container'>

    <div class='photo1Container'>   
         <img class='fotoja1' src="../media/contactUs1.png" alt="Photo 1">
    </div>

    <div class='paragraphContainer1'>
         <p> Leave Us a Comment.</p>
         <p> We love interacting with our Users!</p>
    </div>
    

	</div>

    <div class='container'>
    <img class='fotoja2' src="../media/contactUs2.png" alt="Photo 1">
	</div>

    <div class='container3'>
    
        <div>
            <p>Email:</p>
            <input type="text" name='Email' id='emailinput' >
        </div>

        <div>
          <p>First Name:</p>
          <input type="text" name='Name' id='nameinput' >
        </div>

        <div>
         <p>Last Name:</p>
         <input type="text" name='LastName' id='lastNameinput'>
        </div>

        <div>
            <p>Message:</p>
            <input type="text" id='input4' name='Message' id='messageinput'>
        </div>
        
            <button type='button' name='submit' onclick="validate();">Send</button>

	</div>

 </body>

 <footer>
 <?php 
        include('../reusableCode/footer.php');
    ?>
 </footer>
 </html>

 <script>
        function validate() {
            var email = document.getElementById("emailinput").value;
            var name = document.getElementById("nameinput").value;
            var lastname = document.getElementById("lastnameinput").value;
            var nmessage = document.getElementById("messageinput").value;
            if (email == null ||email== "") {
                alert("Please enter the email.");
                return false;
            }
            if (name== null ||name== "") {
                alert("Please enter the name.");
                return false;
            }
            if (lastname== null ||lastname== "") {
                            alert("Please enter the lastname.");
                            return false;
                        }
            if (nmessage== null ||nmessage== "") {
                            alert("Please enter the nmessage.");
                            return false;
            }
            alert('Message Send Successfuly');
        } 
</script>