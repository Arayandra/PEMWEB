<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Web Advani Rayandra Kahfi Article</title>
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
    include 'koneksi.php';

    $sqlProject = "SELECT * FROM article WHERE id = 1";
    $resultProject = $koneksi->query($sqlProject);

	$sqlProject2 = "SELECT * FROM article WHERE id = 2";
    $resultProject2 = $koneksi->query($sqlProject2);


    $koneksi->close();

    if ($resultProject->num_rows > 0) {
        $row = $resultProject->fetch_assoc();
        $id = $row['id'];
        $kategori = $row['kategori'];
        $judul = $row['judul'];
        $isi = $row['isi'];
    } else {
        echo " ";
    }

	if ($resultProject2->num_rows > 0) {
        $row2 = $resultProject2->fetch_assoc();
        $id2 = $row2['id'];
        $kategori2 = $row2['kategori'];
        $judul2 = $row2['judul'];
        $isi2 = $row2['isi'];
    } else {
        echo " ";
    }
    ?>

	<div id="colorlib-page">
		<a class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.php">Draa<span>.</span></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li class="colorlib-active"><a href="article.php">Article</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="project.php">Project</a></li>
					<li><a href="contact.php">Contact</a></li>
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
			<section class="home-slider js-fullheight owl-carousel">
	      <div class="slider-item js-fullheight" style="background-image:url(images/image_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container-fluid">
	          <div class="row no-gutters slider-text slider-text-2 js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Discover the New Technology</h1>
	            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Discovering new technology is like opening a window to a world never before seen.</p>
	          </div>
	        </div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight" style="background-image:url(images/bg_3.jpg);">
	      	<div class="overlay"></div>
	        <div class="container-fluid">
	          <div class="row no-gutters slider-text slider-text-2 js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Explore and travel</h1>
	            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>
	          </div>
	        </div>
	        </div>
	      </div>
	    </section>
			<section class="ftco-section">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-lg-8">
	    				<div class="row">
	    					<div class="col-md-12">
	    						<div class="blog-entry ftco-animate">
	    							<a class="img" style="background-image: url(images/image_1.jpg);"></a>
	    							<div class="text pt-2 mt-3">
					          	<span class="category mb-1 d-block"><a ><?= $kategori ?></a></span>
				              <h3 class="mb-4"><a ><?= $judul ?></a></h3>
				              <p class="mb-4"><?= $isi ?></p>
				              <div class="author mb-4 d-flex align-items-center">
				            		<a class="img" style="background-image: url(images/foto8.jpeg);"></a>
				            		<div class="ml-3 info">
				            			<span>Written by</span>
				            			<h3><a >Advani Rayandra K</a>, <span>Nov 2, 2024</span></h3>
				            		</div>
				            	</div>
				              <div class="meta-wrap d-md-flex align-items-center">
				              	<div class="half order-md-last text-md-right">
					              	<p class="meta">
					              		<span><i class="icon-heart"></i>3</span>
					              		<span><i class="icon-eye"></i>100</span>
					              		<span><i class="icon-comment"></i>5</span>
					              	</p>
				              	</div>
				    
				              </div>
				            </div>
	    						</div>
	    					</div>

	    					<div class="col-md-12">
	    						<div class="blog-entry ftco-animate">
	    							<a class="img" style="background-image: url(images/image_2.jpg);"></a>
	    							<div class="text pt-2 mt-3">
					          	<span class="category mb-1 d-block"><a ><?= $kategori2 ?></a></span>
				              <h3 class="mb-4"><a ><?= $judul2 ?></a></h3>
				              <p class="mb-4"><?= $isi2 ?></p>
				              <div class="author mb-4 d-flex align-items-center">
				            		<a class="img" style="background-image: url(images/foto8.jpeg);"></a>
				            		<div class="ml-3 info">
				            			<span>Written by</span>
				            			<h3><a >Advani Rayandra K</a>, <span>Oct 28, 2023</span></h3>
				            		</div>
				            	</div>
				              <div class="meta-wrap d-md-flex align-items-center">
				              	<div class="half order-md-last text-md-right">
					              	<p class="meta">
					              		<span><i class="icon-heart"></i>3</span>
					              		<span><i class="icon-eye"></i>100</span>
					              		<span><i class="icon-comment"></i>5</span>
					              	</p>
				              	</div>
				    
				              </div>
				            </div>
	    						</div>
	    					</div>


	    				</div>
	    			</div><!-- END-->
	    			<div class="col-lg-4 sidebar ftco-animate">
	            <div class="sidebar-box ftco-animate">
	            	<h3 class="sidebar-heading">Categories</h3>
	              <ul class="categories">
					<li><a href="article.php">Article</a></li>
                	<li><a href="about.php">About</a></li>
                	<li><a href="project.php">Project</a></li>
					<li><a href="contact.php">Contact</a></li>
	              </ul>
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Popular Projects</h3>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(images/project_1.png);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="project.php">This is My First Project</a></h3>
	                  <div class="meta">
	                    <div><a ><span class="icon-calendar"></span> Oct. 04, 2023</a></div>
	                    <div><a ><span class="icon-person"></span> Advani Rayandra Kahfi</a></div>
	                    <div><a ><span class="icon-chat"></span> 2</a></div>
	                  </div>
	                </div>
	              </div>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(images/project_2.png);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="project.php">This is My Second Project</a></h3>
	                  <div class="meta">
	                    <div><a ><span class="icon-calendar"></span> Jan. 04, 2024</a></div>
	                    <div><a ><span class="icon-person"></span> Advani Rayandra Kahfi</a></div>
	                    <div><a ><span class="icon-chat"></span> 2</a></div>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Tag Cloud</h3>
	              <ul class="tagcloud">
	                <a class="tag-cloud-link">animals</a>
	                <a class="tag-cloud-link">human</a>
	                <a class="tag-cloud-link">people</a>
	                <a class="tag-cloud-link">cat</a>
	                <a class="tag-cloud-link">dog</a>
	                <a class="tag-cloud-link">nature</a>
	                <a class="tag-cloud-link">leaves</a>
	                <a class="tag-cloud-link">food</a>
	              </ul>
	            </div>

	          </div><!-- END COL -->
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
		                <li><a 	><span class="icon icon-phone"></span><span class="text">0895-3248-22085</span></a></li>
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
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>