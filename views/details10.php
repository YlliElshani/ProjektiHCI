<?php 
    session_start();
 ?>
<!DOCTYPE html>
 <html>
 <head>

 <?php
include 'includes/databaza.inc.php';
?>

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
                 <?php
	               $result = $mysqli->query("Select * From $table where ID = '10' ");
                   while ($data = $result->fetch_assoc()){
 					 echo "<img  class='fotoja1' src='{$data['fotosource']}'>";

					}             
					?>
            
          
        </div>

		<div class='textContainer'>
            <p>Movie Name</p>
            <?php
				$result = $mysqli->query("Select * From $table where ID = '10' ");
	            while ($data = $result->fetch_assoc()){
                echo "<p>{$data['Emri']}</p>";

              }
            ?>
            <br/>
            <p>Cmimi</p>
            <?php
				$result = $mysqli->query("Select * From $table where ID = '10' ");
	            while ($data = $result->fetch_assoc()){
                echo "<p>{$data['Cmimi']}</p>";

              }
            ?>
            <br/>
            <?php
            if(isset($_SESSION['role']) && $_SESSION['role'] == 0){
                ?>
                <input class='butoni' type="submit" value="Buy Ticket">
            <?php
            }
            ?>
            <br/>
            <br/>
            <p id='t1'>The moment you buy the ticket a QR code will be send to you by emails</p>
         </div>

	</div>

    <div class='container'>

<div class='b1Container'>
<?php
            if(isset($_SESSION['role']) && $_SESSION['role'] == 0){
                ?>
                <input class='butoni' type="submit" value="Add to Favourites">
            <?php
            }
            ?>
    <p id='t2'>Watch trailer</p>
</div>

<div class='image2Container'>
<?php
	               $result = $mysqli->query("Select * From $table where ID = '10' ");
                   while ($data = $result->fetch_assoc()){
 					       echo "<img  class='fotoja2' src='{$data['fotosource2']}'>";

					}             
					?>
 </div>

</div>

<div class='container3'>
<h4>Movie Synposis:</h4>
<br>
       <?php
				$result = $mysqli->query("Select * From $table where ID = '10' ");
	            while ($data = $result->fetch_assoc()){
                echo "<h5 id='description'>{$data['Pershkrimi']}</h5>";

              }
            ?>

</div>

    

 </body>
 <footer>
 <?php 
        include('../reusableCode/footer.php');
    ?>
 </footer>
 </html>