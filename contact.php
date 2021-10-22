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
<title>Africa Tours - Contact Form</title>
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
            <h1>Contact Us</h1>
    </section>
    
    
<!------- Contact Us ------->

    
    <section class="location">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10784.120335957741!2d-122.175813!3d47.4893273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5c2227745c0066ea!2sRenton%20Technical%20College!5e0!3m2!1sen!2sus!4v1622228938778!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    
    <section class="contact-us">
            <div class="row">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-home"></i>
                        <span>
                            <h5>3000 NE 4th St, RTC Building</h5>
                            <p>Renton, Washington, 98056</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <span>
                            <h5>+1 908-930-8428</h5>
                            <p>Monday to Saturday 10 Am to 6 Pm</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-envelope-o"></i>
                        <span>
                            <h5>info@africatours.com</h5>
                            <p>Email us your query</p>
                        </span>
                    </div>
                </div>
                <div class="contact-col">
                    <form method="post" action="contact-form-handler.php">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Enter email address" required>
                    <input type="text" name="subject" placeholder="Enter your subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" class="hero-btn red-btn">Send Message</button>
                    </form> 
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