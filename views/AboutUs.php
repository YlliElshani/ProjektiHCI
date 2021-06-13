<?php 
    session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
    <link rel="stylesheet" href="../style/contactUs.css" type="text/css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="UTF-8">
</head>
<body>
	<?php 
        include('../reusableCode/header.php');
    ?>
        <div class="orange">
    	
    </div>
    <div class="LearnMore">
    	<label>Learn More</label>
    	<p>Cinema is the country's leading producer of open-air cinema events. Our screenings follow one simple formula: a classic film on a big screen in a beautiful or prestigious setting. We use state of the art screens, digital projectors and bespoke sound equipment to provide a cinema-quality visual and audio experience, but with the magic of being under the stars.</p>
    </div>
    <div class="fotoja">
	    <img src="../media/au.jpg" width="600" height="350">
    </div>
    <div class="label2">
    	<label>
    		Our Services
    	</label>
    </div>
    <div class="Komponentat">
    	<div class="Komp1">
    		<img src="../media/newspaper.png" width="100" height="90">
    		<br/>
    		We share the latest news regarding the movie industry
    	</div>
    	<div class="Komp1">
    		<img src="../media/ticket.png" width="100" height="90">
    		<br/>
    		We provide tickets fo the latest movies released
    	</div>
    	<div class="Komp1">
    		<img src="../media/play-store.png" width="100" height="90">
    		<br/>
    		Our users can view trailers for their favourite movies
    	</div>
    	<div class="Komp1">
    		<img src="../media/user.png" width="100" height="90">
    		<br/>
    		Users can create and manage their own profile
    	</div>
    </div>
     <div class="Komponentat2">
    	<div class="Komp12">
    		<img src="../media/interactive.png" width="100" height="90">
    		<br/>
    		We provide interaction with our community
    	</div>
    	<div class="Komp13">
    		<img src="../media/polling.png" width="100" height="90">
    		<br/>
    		We share the latest news regarding the movie industry
    	</div>
    </div>
    <div class="label2">
    	<label>
    		Our Team
    	</label>
    </div>
     <div class="Komponentat3">
    	<div class="Team1">
    		<img src="../media/ceo-office.png" width="100" height="90">
    		<br/>
    		<h4 style="color:black;">Manager</h4>
    	</div>
    	<div class="Team2">
    		<img src="../media/ceo.png" width="100" height="90">
    		<br/>
    		<h4 style="color:black;">CEO</h4>
    	</div>
    	<div class="Team3">
    		<img src="../media/ceo-user.png" width="100" height="90">
    		<br/>
    		<h4 style="color:black;">CFO</h4>
    	</div>
    </div>
    <div class="Komponentat4">
    	<div class="Team1">
    		<img src="../media/user.png" width="100" height="90">
    		<br/>
    		<h4 style="color:black;">Co-Founder</h4>
    	</div>
    	<div class="Team3">
    		<img src="../media/user.png" width="100" height="90">
    		<h4 style="color:black;">CTO</h4>
    		<br/>
    	</div>
    </div>
    <?php 
        include('../reusableCode/footer.php');
    ?>
</body>
</html>

<style type="text/css">
	.LearnMore{
		background-color: rgb(9,3,44);
		margin-left: 20%;
		margin-top: 20%;
		font-family: Montserrat;
		padding: 30px;
		width: 400px;
	}
	.LearnMore label{
		margin-left: 2%;
		padding: 10px;
		font-size:25px;
		font-family:Montserrat;
	}

	.fotoja img{
		position: absolute;
		top:170px;
		left: 450px;
    	z-index:-1;
	}

	.orange{
		width: 600px;
		height: 350px;
		background-color: rgb(195,87,26);
		position: absolute;
		top: 15%;
		left: 600px;
		z-index: -1;
	}

	.label2{
		font-family:Montserrat;
		font-size: 25px;
		text-align: center;
		margin-top: 3%;
		margin-bottom: 3%;
	}

	.Komponentat{
		margin-top: 5%;
		margin-left: 5%;
		margin-right: 5%;
		display: flex;
		flex-direction: row;
		flex-wrap: nowrap;
		justify-content: space-between;
		padding: 30px;	}

	.Komp1{
		padding: 15px;
		width: 150px;
		height: 180px;
		font-family:Montserrat;
		text-align: center;
		border-radius: 15px;
		background-color: rgb(195,87,26);
	}

	.Komponentat2{
		margin-top: 5%;
		margin-left: 5%;
		margin-right: 5%;
		display: flex;
		flex-direction: row;
		flex-wrap: nowrap;
		padding: 30px;
	}
	.Komp12{
		padding: 15px;
		width: 150px;
		height: 180px;
		font-family:Montserrat;
		font-size: 17px;
		text-align: center;
		border-radius: 15px;
		background-color: rgb(195,87,26);
		margin-left: 25%;
	}
	.Komp13{
		padding: 15px;
		width: 150px;
		height: 180px;
		font-family:Montserrat;
		font-size: 17px;
		text-align: center;
		border-radius: 15px;
		background-color: rgb(195,87,26);
		margin-left: 25%;
	}

	.Komponentat3{
		margin-left: 10%;
		margin-right: 10%;
		display: flex;
		flex-direction: row;
		flex-wrap: nowrap;
		justify-content: space-between;
		padding: 30px;
	}

	.Team1{
		padding: 15px;
		width: 180px;
		height: 180px;
		font-family:Montserrat;
		font-size: 17px;
		text-align: center;
		border-radius: 50%;	
		background-color: #fff;
	}

	.Team2{
		padding: 15px;
		width: 180px;
		height: 180px;
		font-family:Montserrat;
		font-size: 17px;
		text-align: center;
		border-radius: 50%;
		color:black;	
		background-color: #fff;
	}

	.Team3{
		padding: 15px;
		width: 180px;
		height: 180px;
		font-family:Montserrat;
		font-size: 17px;
		text-align: center;
		border-radius: 50%;		
		color:black;	
		background-color: #fff;
	}

	.Komponentat4{
		margin-top: 3%;
		margin-left: 10%;
		margin-right: 10%;
		display: flex;
		flex-direction: row;
		flex-wrap: nowrap;
		justify-content: space-around;
		padding: 30px;
	}
</style>