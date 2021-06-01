<!DOCTYPE html>
<html>
<head>
	7
	<title>Contacts</title>
</head>
<body>
	<?php
	  include 'includes/header.php';
	 ?>
	<style>
		body {
			background-color: #CCCCFF;
	 		background-image: url(contact.jp);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;

            }
		
	</style>
 <h1 style="color: black;text-align: center;padding-top: 60px;">Contact Us</h1>
 <div style="text-align: center;font-size: 25px;color: black;margin: 40px;border-style: hidden;height: 30px;font-weight: bolder;">Name:&ensp;&ensp;&ensp;&ensp;<input type="text" name="name" style="width: 50%;height: 40px;background-color: gray;border-top-style: hidden;
        border-right-style: hidden;
        border-left-style: hidden;
        border-bottom-style: hidden;border-radius: 10px;"></div>
 <div style="text-align: center;font-size: 25px;color: black;margin: 40px;font-weight: bolder;">Mobile:&ensp;&ensp;&ensp;<input type="number" name="name" style="width: 50%;height: 40px;background-color: gray;border-top-style: hidden;
        border-right-style: hidden;
        border-left-style: hidden;
        border-bottom-style: hidden;border-radius: 10px;"></div>
 <div style="text-align: center;font-size: 25px;color: black;margin: 40px;font-weight: bolder;">Email:&ensp;&ensp;&ensp;&ensp;<input type="text" name="name" style="width: 50%;height: 40px;background-color: gray;border-top-style: hidden;
        border-right-style: hidden;
        border-left-style: hidden;
        border-bottom-style: hidden;border-radius: 10px;"></div>
 <div style="text-align: center;font-size: 25px;color: black;margin: 40px;font-weight: bolder;">Message:&ensp;&ensp;<input type="text" name="name" style="width: 50%;height: 80px;background-color: gray;border-top-style: hidden;
        border-right-style: hidden;
        border-left-style: hidden;
        border-bottom-style: hidden;border-radius: 10px;"></div>
 <div style="margin-left: 50px;"><button style="text-align: center; height: 40px;background-color: gray;margin: 40px;font-weight: bolder;border-radius: 30px;border-style: none;padding-left: 40px;padding-right: 40px;">Submit</button><button style="text-align: center; height: 40px;background-color: gray;margin: 40px;font-weight: bolder;border-radius: 30px;border-style: none;padding-left: 40px;padding-right: 40px;">Cancel</button></div>
 <?php
  include 'includes/bio.php'
  ?>
<?php
  include 'includes/footer.php'
  ?>
</body>
</html>