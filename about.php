<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Africa Tours - About Us</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.php"><img src="images/AfricaLogo.png"></a>
            <div class="nav-links" id="navLinks">  
                <i class="fa fa-close" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="package.php">PACKAGES</a></li>
					<li><a href="gallery.php">GALLERY</a></li>
					 <li><a href="tour.php">TOUR</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
					 <li><a href="logout.php">LOG OUT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>   
            <h1>About Us</h1>
    </section>
    
    
<!------- about us content -------->
    
<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>We are the world's Best Travel Guide</h1>     
            <p>Guided Tours through Africa Tours are immersive excursions with authentic experiences that highlight the local culture. Enjoy the world’s iconic attractions with VIP passes, hotels, and transportation taken care of, plus get under-the-radar insights, not typically available to independent travelers. Whether you’re traveling solo, with adults-only or with family, Africa Tours will match you up with a professional guide who’ll personalize your vacation with a range of fascinating and unique experiences that really bring each destination to life.</p>
            <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
        </div>
        <div class="about-col">
            <img src="images/maasai.jpg">
        </div>
    </div>    
</section>
    
<!-------- footer ---------->

<section class="footer">
        <h4>About Us</h4>
        <p>At Africa Tours it’s the people who make a difference. Our travel experts craft the perfect trip for every traveler through our award-winning customer service.<br>
			Real people helping real people. Beside you every step of the way.</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>made with <i class="fa fa-heart-o"></i> by Denis Mbuthia</p>
</section>    
  
      
</body>
</html>    