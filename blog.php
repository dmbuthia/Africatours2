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
<title>Africa Tours - Blog</title>
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
            <h1>BLOG</h1>
    </section>
    
<!---------- Blog Page Content ---------->
    
    <section class="blog-content">
    <div class="row">
    <div class="blog-left">
        <img src="images/Africa3.jpg">
        <h2>AFRICA TRAVEL GUIDE 2021</h2>
        
        <p>
		Africa is a massive continent with a varied climate, landscape, and wildlife. Choosing the best time to visit depends on your interests and what you’re hoping to see during your vacation.

		If you’re planning a safari trip to Africa, visit during the dry season. From May to August, the rains are infrequent, driving the wildlife to nearby waterholes and making it easy to spot elusive creatures like lions and leopards. Read more about the Best Time to Go on Safari in Africa by Month!

		But if you’re a bird lover, you’ll want to visit between November and April. The weather is hot and wet, and you’ll have unparalleled birdwatching opportunities.

		Botswana, Kenya, Mozambique, Namibia, South Africa, Tanzania, Uganda, Zambia, and Zimbabwe all offer incredible safari experiences!

		Check out my The Ultimate Africa Travel Bucket List or guide on How to Choose an African Safari (That’s Right for You) to help you start planning your big adventure!</p>
		
        <br>
		<h2>WHAT TO EXPECT</h2> 
		<br>
        <p> <h4>Northern Africa:</h4> Algeria, Egypt, Libya, Morocco, Tunisia, and Western Sahara make up the North Africa region. The main language spoken is Arabic, and Islam is the dominant religion. It’s famous for its natural wonders like the Sahara Desert, the Nile River, the Red Sea, and the Atlas Mountains.

			<h4>Central Africa:</h4> The Central Africa region is made up of Cameroon, Central Africa Republic, the DRC, Equatorial Guinea, Gabon, Republic of the Congo, Sao Tome, and Principe, and South Sudan. Due to political instability, it’s one of the least visited regions in Africa, and some countries have little to none tourist infrastructure.

			<h4>Eastern Africa:</h4> East Africa is home to some of Africa’s top safari destinations with incredible wildlife sightings. Travel to Kenya or Tanzania to watch the Great Migration that takes place between July and September every year or trek to the summit of Mount Kilimanjaro. Madagascar, Seychelles, Reunion, and Mauritius are only a short flight from the mainland and are great options for travelers looking for a luxury honeymoon or off-the-grid adventure. Uganda is an amazing place for seeing wildlife and gorilla trekking.

			<h4>Southern Africa:</h4> Southern Africa is one of the most traveled regions in Africa for locals and international visitors. It’s made up of Angola, Botswana, Eswatini, Lesotho, Malawi, Mozambique, Namibia, South Africa, Zambia, and Zimbabwe. Some of the most popular destinations include Cape Town, Victoria Falls, Sossusvlei, Kruger National Park, and Chobe National Park.

			<h4>Western Africa:</h4> The easiest country to visit in West Africa is Ghana and is often called “Africa for Beginners”. It boasts varied landscapes, beautiful beaches, excellent surfing conditions and is the best place to learn about the history of the Atlantic Slave Trade. Other popular destinations include Senegal, Gambia, Benin, and Cape Verde.

			<h4>Malaria and Yellow Fever:</h4> In sub-Saharan Africa, Yellow Fever is a real threat. If you don’t have the vaccination certificate, the airline and country can deport you. For Malaria in Africa, different countries have different strains. Your doctor needs to know exactly where you are going to give you the correct medication.</p>
        
        <div class="comment-box">
            <h3>Leave a comment</h3>
            <form class="comment-form">
                    <input type="text" placeholder="Enter Name">
                    <input type="email" placeholder="Enter email">
                    <textarea rows="5" placeholder="Your Comment"></textarea>
                    <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
            </form>
        </div>
    </div>
        
    <div class="blog-right">
        
        
            <h3>Our Ratings</h3>
            <div>
                <span>Booking Services</span>
                <span>
				 <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
					
				</span>
            </div>
            <div>
                <span>Price Guarantees</span>
                <span> <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i></span>
            </div>
            <div>
                <span>Vacation Packages</span>
                <span> <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i></span>
            </div>
            <div>
                <span>Discounted Rates</span>
                <span> <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i></span>
            </div>
            <div>
                <span>Safety</span>
                <span> <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i></span>
            </div>
            <div>
                <span>Professionalism</span>
                <span> <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i></span>
            </div>
            <div>
                <span>Customer Service</span>
                <span> <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i></span>
            </div>
           
        </div> 
    
    </div>
    </section>
    
<!-------- footer ---------->

<section class="footer">
		
        <h4>About Us</h4>
        <p>At Africa Tours it’s the people who make a difference. Our travel experts craft the perfect trip for every traveler through our award-winning customer service.<br>
			Real people helping real people. Beside you every step of the way.</p>
        <div class="icons" >
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
		
        <p>made with <i class="fa fa-heart-o"></i> by Denis Mbuthia</p>
</section>    
  
  
    
</body>
</html>    