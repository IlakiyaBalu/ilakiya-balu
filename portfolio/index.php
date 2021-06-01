<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 550px)" href="css/style1.css">
	<title>My Website</title>
</head>
<body>
	 <style>
	 	body {

	 		background-image: url(background.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            
            }     

	 </style>
	<?php
	  include 'includes/header.php';
	 ?>
<div class="front">	 
<h1 style="text-align: center;background-color: #5D6D7E;opacity: 70%;border-radius: px;padding: 20px;margin-top: 80px;padding-right: 10px;padding-top: 20px;font-size: 25px; ">I am a Full stack Developer</h1>	
</div>
<style>
	.button a {
		text-align: center;
		background-color: #71727B;
        margin-right: 130px;
        margin-left: 130px;
        color: #040B32;
        padding: 15px 32px;
        text-decoration: none;
        font-size: 20px;
        display: flex;
        justify-content: center;
        opacity: 90%;
        font-family: sans-serif;
        font-weight: bolder;
        border-radius: 30px;
        margin-bottom: 150px;
        margin-top: 150px;

	}
</style>
<div class="button">
 <a href='resume.pdf'>View Resume</a>
</div>
<?php
  include 'includes/bio.php'
  ?>

<?php
  include 'includes/footer.php'
  ?>
</body>
</html>