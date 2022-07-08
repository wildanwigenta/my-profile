<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>About</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>

<?php include('include/navbar.php') ?>
<section class="w3l-about-breadcrum">
  <div class="breadcrum-bg">
    <div class="container py-5">
      <p><a href="index.php">Home</a> &nbsp; / &nbsp;<a href="about.php">About</a></p>
     </div>
  </div>
</section>
<!-- w3l-content-photo-5 -->
<div class="w3l-content-photo-5 py-5" id="about">
	<div class="content-main pt-lg-5 pt-md-3 pb-0">
		<div class="container">
			<div class="row">
        <?php 
              include('admin/include/konek.php');
              $query = "SELECT * FROM about";
              $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                  $row = mysqli_fetch_array($result);
        ?>
				<div class="col-lg-5 content-photo">
					<a href="#"><img src="assets/images/about/<?= $row['gambar']?>" class="img-fluid" alt="content-photo"></a>
				</div>
				<div class="col-lg-7 content-left mt-lg-0 mt-5 pl-lg-5">
					<h3>About Me</h3>
					<p class="mb-0"><?= $row['deskripsi']?></p>
          <a href="cv.php" class="btn btn-primary mt-5" target="_blank">View</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //w3l-content-photo-5 -->

 <!-- grids block 5 -->
 <?php include('include/footer.php') ?>
<!-- // grids block 5 -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>

<script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>

<!-- Smooth scrolling -->



</body>

</html>
<!-- // grids block 5 -->

