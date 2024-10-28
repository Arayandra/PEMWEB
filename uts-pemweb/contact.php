<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Web Advani Rayandra Kahfi Contact </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<?php
// Menyertakan koneksi ke database
include 'koneksi.php';

// Memeriksa apakah data dikirim melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $judul = $_POST['judul'];
    $pesan = $_POST['pesan'];

    // Menyiapkan dan menjalankan query untuk menyimpan data
    $sql = "INSERT INTO contact (nama, email, judul, pesan) VALUES ('$nama', '$email', '$judul', '$pesan')";

    if ($koneksi->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // Menutup koneksi
    $koneksi->close();
}
?>

	<div id="colorlib-page">
		<a class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.php">Draa<span>.</span></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="article.php">Article</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="project.php">Project</a></li>
					<li class="colorlib-active"><a href="contact.php">Contact</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
				<ul>
					<li><a href="https://id-id.facebook.com/"><i class="icon-facebook"></i></a></li>
					<li><a href="https://x.com/?lang=en"><i class="icon-twitter"></i></a></li>
					<li><a href="https://www.instagram.com/"><i class="icon-instagram"></i></a></li>
					<li><a href="https://www.linkedin.com/"><i class="icon-linkedin"></i></a></li>
				</ul>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section contact-section">
	      <div class="container">
	        <div class="row d-flex mb-5 contact-info">
	          <div class="col-md-12 mb-4">
	            <h2 class="h4 font-weight-bold">Contact Information</h2>
	          </div>
	          <div class="w-100"></div>
	          <div class="col-md-3">
	            <p><span>Address:</span>Perumahan Puri Bintaro Hijau Blok D4/11 RT 05 RW 12 Pondok Aren, Tangerang Selatan.</p>
	          </div>
	          <div class="col-md-3">
	            <p><span>Phone:</span> <a href="tel://1234567920">0895-3248-22085</a></p>
	          </div>
	          <div class="col-md-3">
	            <p><span>Email:</span> <a href="mailto:advanirayandrak@gmail.com">andra@gmail.com</a></p>
	          </div>
	          <div class="col-md-3">
	            <p><span></span> <a href="index.php">Back to Home</a></p>
	          </div>
	        </div>
	        <div class="row block-9">
	          <div class="col-md-6 order-md-last pr-md-5">
			  <form action="contact.php" method="POST">
				  <div class="form-group">
    				<input type="text" class="form-control" name="nama" placeholder="Name" required>
  				  </div>
  				  <div class="form-group">
    				<input type="email" class="form-control" name="email" placeholder="Email" required>
  				  </div>
  				  <div class="form-group">
    				<input type="text" class="form-control" name="judul" placeholder="Title" required>
 			      </div>
  				  <div class="form-group">
    				<textarea name="pesan" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
  				  </div>
  				  <div class="form-group">
   					 <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
  				  </div>
			</form>
	          
	          </div>

	          <div class="col-md-6">
	          	<div id="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.086004005508!2d106.70552647399032!3d-6.252398393736064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbdd8922da8f%3A0xf825fd9189c64697!2sPerumahan%20Puri%20Bintaro%20Hijau!5e0!3m2!1sen!2sid!4v1729694358426!5m2!1sen!2sid" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
	          </div>
	        </div>
	      </div>
	    </section>

	    <footer class="ftco-footer ftco-bg-dark ftco-section">
	      <div class="container px-md-5">
	        <div class="row mb-5">
	          <div class="col-md">
	            <div class="ftco-footer-widget mb-4 ml-md-4">
	              <h2 class="ftco-heading-2">Category</h2>
	              <ul class="list-unstyled categories">
	                <li><a href="article.php">Article</a></li>
                	<li><a href="about.php">About</a></li>
                	<li><a href="project.php">Project</a></li>
					<li><a href="contact.php">Contact</a></li>
	              </ul>
	            </div>
	          </div>
	          <div class="col-md">
	             <div class="ftco-footer-widget mb-4">
	              <h2 class="ftco-heading-2">Archives</h2>
	              <ul class="list-unstyled categories">
	              	<li><a >October 2018 <span>(6)</span></a></li>
	                <li><a >September 2018 <span>(6)</span></a></li>
	                <li><a >August 2018 <span>(8)</span></a></li>
	                <li><a >July 2018 <span>(2)</span></a></li>
	                <li><a >June 2018 <span>(7)</span></a></li>
	              </ul>
	            </div>
	          </div>
	          <div class="col-md">
	            <div class="ftco-footer-widget mb-4">
	            	<h2 class="ftco-heading-2">Have a Questions?</h2>
	            	<div class="block-23 mb-3">
		              <ul>
		                <li><span class="icon icon-map-marker"></span><span class="text">Perumahan Puri Bintaro Hijau Blok D4/11 RT 05 RW 12 Pondok Aren, Tangerang Selatan.</span></li>
		                <li><a ><span class="icon icon-phone"></span><span class="text">0895-3248-22085</span></a></li>
		                <li><a href="mailto:advanirayandrak@gmail.com"><span class="icon icon-envelope"></span><span class="text">andra@gmail.com</span></a></li>
		              </ul>
		            </div>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12">

	            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	          </div>
	        </div>
	      </div>
	    </footer>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- <script src="js/google-map.js"></script> -->

  <!-- <script src="js/jquery.timepicker.min.js"></script> -->

  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>