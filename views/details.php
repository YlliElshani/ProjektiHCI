 <!DOCTYPE html>
 <html>
 <head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details</title>
    <link rel="stylesheet" href="../style/details.css" type="text/css">
    
 </head>
 <body>
 	<?php 
        include('../reusableCode/header.php');
    ?>

	<div class='container'>

        <div class='imageContainer'>
            <img class='fotoja1' src="../media/detailsphoto1.jpg" alt="Photo 1">
        </div>

		<div class='textContainer'>
            <p>Movie Name</p>
            <p>Wrath of Man</p>
            <br/>
            <p>Cmimi</p>
            <p>3.99€</p>
            <br/>
            <button class='butoni' type="button">Buy Ticket</button>
            <br/>
            <br/>
            <p id='t1'>The moment you buy the ticket a QR code will be send to you by emails</p>
         </div>

	</div>

    <div class='container'>

<div class='b1Container'>
    <button   button class='butoni' type="button">Add to Favorites</button>
    <p id='t2'>Watch trailer</p>
</div>

<div class='image2Container'>
    <img class='fotoja2' src="../media/detailsphoto2.jpg" alt="Photo 1">
 </div>

</div>

<div class='container3'>
<h4>Movie Synposis:</h4>
<br>
<h5 id='description'> Adapted from the 2004 French film "Le Convoyeur" (aka "Cash Truck"),
     and borrowing the basic outline of the story, "Wrath of Man" is a time-shifting
      neo-noir crime thriller, filled with tough, sometimes violent men: gangsters and
       former combat veterans, mostly, with a smattering of security guards and cops</h5>


</div>

    

 </body>
 <footer>
 <?php 
        include('../reusableCode/footer.php');
    ?>
 </footer>
 </html>