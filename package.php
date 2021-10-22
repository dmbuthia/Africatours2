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
<title>Africa Tours Packages</title>
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
            <h1>Our Packages</h1>
    </section>
    
    
<!---------- Package ----------->
    
    <section class="Package">
        <h1>Packages We Offer</h1>
        <p>Affordable Travel Packages to suit your Every Need!</p>
        <div class="row">
            <div class="Package-col">
                <h3>Vacation Packages</h3>
                <p>When it comes to vacations, there are as many ways to explore the world as there are people on it. Our family, honeymoon, or adults-only vacations connect you with each other and your destination. If you want it all, our all-inclusive or luxury vacations have you covered at some of the world’s most popular resorts. Do more with our casino or golf and spa vacations. Take a journey with our exotic vacations. Whether you’re planning a cruise or a last-minute break to your favorite city—your Africa Tours vacation consultant can match you with a vacation package that’s just your style.</p>
            </div>
            <div class="Package-col">
                <h3>Guided Tour Packages</h3>
                <p>Guided Tours through Africa Tours are immersive excursions with authentic experiences that highlight the local culture. Enjoy Africa's iconic attractions with VIP passes, hotels, and transportation taken care of, plus get under-the-radar insights, not typically available to independent travelers. Whether you’re traveling solo, with adults-only or with family, Liberty Travel will match you up with a professional guide who’ll personalize your vacation with a range of fascinating and unique experiences that really bring each destination to life.</p>
            </div>
            <div class="Package-col">
                <h3>Cruise Packages</h3>
                <p>Explore Africa on a cruise. Ships boast dazzling amenities, including 5-star accommodations and dining, onboard thrills from casinos to water slides, and unique cultural opportunities. Explore the high seas on an ocean cruise or experience a country’s interior on a river cruise. Africa Tour's cruise packages make it easier than ever to discover Africa.Have future travel credits waiting to be put to good use? At Africa Tours, we’ll help you make the most of your travel credits</p>
            </div>
        </div>
    </section>
    
<!---------- Features ---------->
    
    <section class="feature">
        <h1>Our Features</h1>
        <p>Take a look at our Awesome Bucket List Sites To Visit</p>
            <div class="row">
                <div class="feature-col">
                    <img src="images/safari1.gif">
                    <h3>Maasai Mara Safari</h3>
                    <p>Wildlife Safari journeys are a wonderful way to experience Africa for the first time. They take place at spacious, comfortable lodges and camps located in scenic stretches of Africa’s most popular game parks and reserves, offering a panorama of daily life in the African bush.</p>
                </div>
                <div class="feature-col">
                    <img src="images/africamountains.jpg">
                    <h3>Mountaineering</h3>
                    <p>We run our own trekking operations, staffed with expert mountain guides, and do not act as a booking agent for other companies. We will give you comprehensive advice on packing, fitness, expected weather and trail conditions, and be by your side every step of the way – all the way to the Summit! </p>
                </div>
                <div class="feature-col">
                    <img src="images/cusine2.jpg">
                    <h3>Tasty and Healthy Food</h3>
                    <p>African cuisine is known for its delectable moorish flavours, rich textures and surprisingly healthy fruit and vegetable bases, African food is being increasingly appreciated by visitors to the region and beyond. From Cape Verde to Cameroon to Mombasa, all of Africa and in between,you will enjoy some of the tastiest dishes. Must try!</p>
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