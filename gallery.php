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
    <title>Africa Gallery</title>
    <link rel="stylesheet" href="styleG.css"> 
	
    <link rel="stylesheet" href="jquery.flipster.min.css">
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
            <h1>GALLERY</h1>
    </section>

    <div class="hero">
        <div class="carousel">
            <ul>
                <li><img src="imagesG/img1.jpg"></li>
                <li><img src="imagesG/img2.jpg"></li>
                <li><img src="imagesG/img3.jpg"></li>
                <li><img src="imagesG/img4.jpg"></li>
                <li><img src="imagesG/img5.jpg"></li>
                <li><img src="imagesG/img6.jpg"></li>
                <li><img src="imagesG/img7.jpg"></li>
                <li><img src="imagesG/img8.jpg"></li>
                <li><img src="imagesG/img9.jpg"></li>
                <li><img src="imagesG/img10.jpg"></li>
				<li><img src="imagesG/img11.jpg"></li>
				<li><img src="imagesG/img12.png"></li>
				<li><img src="imagesG/img13.jpg"></li>
				<li><img src="imagesG/img14.jpg"></li>
				<li><img src="imagesG/img15.jpg"></li>
				<li><img src="imagesG/img16.jpg"></li>
				<li><img src="imagesG/img17.jpg"></li>
				<li><img src="imagesG/img18.jpg"></li>
				<li><img src="imagesG/img19.jpg"></li>
				<li><img src="imagesG/img20.jpg"></li>
            </ul>
        </div>
    </div>
  
    
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="jquery.flipster.min.js"></script>

<script>
    $('.carousel').flipster({
        style:'carousel',
        spacing: 0.1,
    });
</script>


</body>

</html>
