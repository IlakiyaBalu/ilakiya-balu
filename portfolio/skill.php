<!DOCTYPE html>
<html>
<head>
 
	<title>Skills</title>
</head>
<body>
  <?php
    include 'includes/header.php';
   ?>
	<style>
		
			body {
        background-color: white;
	 		background-image: url(skill.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;

            }
		  

		.container {
              width: 50%; /* Full width */
              background-color: #85929E; /* Grey background */
              border-radius: 20px;
}

        .skills {
              text-align: right; /* Right-align text */
              padding-top: 10px; /* Add top padding */
              padding-bottom: 10px; /* Add bottom padding */
              color: black; /* White text color */
}

.html {width: 90%;border-radius: 20px;background-color: #34495E;} /* Green */
.css {width: 80%;border-radius: 20px; background-color: #34495E;} /* Blue */
.js {width: 65%;border-radius: 20px; background-color: #34495E;} /* Red */
.php {width: 60%;border-radius: 20px; background-color: #34495E;} /* Dark Grey */
       
	</style>
<div>
	<img style="float: right;width: 40%;height: 500px;" src="skill1.jpg">
</div>	

 <h1 style="color: black;font-size: 26px;text-align: center;padding-top: 55px;">Technical Skills</h1>
 <p style="font-weight: bolder;padding: 10px;color: black;font-size: 22px;">HTML</p>
 <h3 style="font-family: serif;border-radius: 10px; font-weight: normal; padding: 10px;color: #black;font-size: 20px; background-color: ;width: 58%; ">The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript.To learn more <a href="https://www.w3schools.com/html/">click Here</a></h3>
<div class="container">
  <div class="skills html">90%</div>
</div>

<p style="font-weight: bolder; padding-left: 10px;color: black;font-size: 22px;">CSS</p>
<h4 style="font-family: serif;border-radius: 10px; font-weight: normal;padding: 10px;color: black;font-size: 20px;background-color: ;width: ;padding: 10px;">Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.To learn more <a href="https://www.w3schools.com/css/">click Here</a></h4>
<div class="container">
  <div class="skills css">80%</div>
</div>

<p style="font-weight: bolder;padding-left: 10px;color: black;font-size: 22px;">Python Programming</p>
<h5 style="font-family: serif;border-radius: 10px; font-weight: normal;padding: 10px;color: black;font-size: 20px;background-color: ;width: ;">Python is an interpreted high-level general-purpose programming language. Python's design philosophy emphasizes code readability with its notable use of significant indentation. Its language constructs as well as its object-oriented approach aim to help programmers write clear, logical code for small and large-scale projects.To learn more <a href="https://www.w3schools.com/Python/">click Here</a></h5>
<div class="container">
  <div class="skills js">65%</div>
</div>

<p style="font-weight: bolder;padding-left: 10px;color: black;font-size: 22px;">MY SQL</p>
<h6 style="font-family: serif;border-radius: 10px; font-weight: normal;padding: 10px;color: black;font-size: 20px;background-color: ;width:;">MySQL is an open-source relational database management system. Its name is a combination of "My", the name of co-founder Michael Widenius's daughter, and "SQL", the abbreviation for Structured Query Language.To learn more <a href="https://www.w3schools.com/MySQL/">click Here</a></h6>
<div class="container">
  <div class="skills php">60%</div>
</div>

<h2 style="color: black;font-size: 22px;text-align: 
center;background-color: #A6ACAF;color: #34495E;padding: 10px;">Soft Skills</h2>
<div class="Soft">
<h6 style="
      background-color: ;
      font-family: cursive;
    	color: #34495E;
      font-size: 18px;
      text-align: center;
      
       ">
   Time Management</br></br>
 Emotional Inteligence</br></br>
Ledership Quality</br></br>
Problem Solving</br></br>
Adaptability</br></br>
Communication</h6>
</div>
</body>
<?php
  include 'includes/bio.php'
  ?>

<?php
  include 'includes/footer.php'
  ?>

</html>