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

    <title>My Profile</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>

<?php include('include/navbar.php') ?>
 <!--  Main banner section -->
 <section class="w3l-main-banner" id="home">
  <div class="companies20-content">
    <div class="companies-wrapper">
        <div class="item">
         
            <div class="slider-info banner-view text-center">
            <?php 
                include('admin/include/konek.php');
                $query = "SELECT * FROM profile";
                $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                     $row = mysqli_fetch_array($result);
                    ?>
              <div class="banner-info container">            
                    <img src="assets/images/profile/<?= $row['gambar']?>" alt="about image" class="img-fluid">
                    <h3 class="banner-text mt-5">Hello, I'm <?= $row['nama']?></h3>                
                    <p class="my-4 mb-5"><?= $row['title']?></p><br>                
              </div>
            </div>
        </div>
    </div>
  </div>
</section>
 <!--  //Main banner section -->
<section class="w3l-about ">
    <div class="skills-bars py-5">
        <div class="container py-md-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">My Skills</h3>
                <p class="my-3 head">Keahlian Saya</p>
            </div>
        
            <div class="row mt-5 pt-3">
                <?php 
                include('admin/include/konek.php');
                $query = "SELECT * FROM skill";
                $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 skills-bar-grids mb-4 pb-2">
                        <h4><?= $row['skill']?>
                        <span class="float-right"><?= $row['presentase']?>%</span>
                        </h4>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-color" role="progressbar" style="width: <?= $row['presentase']?>% ;height:4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div> 
                <?php } ?>
            </div>
        </div>
    </div>
 </section>

 <section class="w3l-feature-3" id="features" >

	<div class="" style="background:url('assets/images/1.jpg') no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    padding: 100px 0 120px;
    background-attachment: fixed;
    position: relative;
    z-index: 0;">
		<div class="container">
			<div class="heading text-center mx-auto">
                <h3 class="head text-white">My Hobby</h3>
            </div>

			<div class="middle-section grid-column text-center mt-5 pt-3">
                <?php 
                    include('admin/include/konek.php');
                    $query = "SELECT * FROM hoby ORDER BY id_hoby DESC LIMIT 4 ";
                    $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                    <div class="three-grids-columns">
                    <img src="assets/images/hoby/<?= $row['gambar']?>" alt="">
                        <h4><?= $row['hoby']?></h4>
                        <p><?= $row['deskripsi']?></p>					
                    </div>
                <?php } ?>
			</div>

		</div>
	</div>
</section>
<div class="products-4" id="portfolio">

    <!-- Products4 block -->
    <div id="products4-block" class="text-center">
        <div class="container">
            <div class="heading text-center mx-auto mb-5">
                <h3 class="head">MY PROJECT</h3>
                <p class="my-3 head"> </p>
              </div>
            <input id="tab1" type="radio" name="tabs" checked>
            <label class="tabtle" for="tab1">Website</label>

            <input id="tab2" type="radio" name="tabs">
            <label class="tabtle" for="tab2">Design</label>

            <input id="tab3" type="radio" name="tabs">
            <label class="tabtle" for="tab3">Photography</label>

            <input id="tab4" type="radio" name="tabs">
            <label class="tabtle" for="tab4">Art</label>

            <!-- website -->
            <section id="content1" class="tab-content text-left">
                <div class="d-grid grid-col-3">
                    <?php 
                         $query = "SELECT * FROM project WHERE project='website'";
                         $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                         while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="product">
                        <a href="assets/images/project/<?= $row['gambar']?>" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/project/<?= $row['gambar']?>" class="img-responsive" alt="" />
                            </figure>
                         </a>
                    </div>
                    <?php } ?>
                </div>
            </section>

            <!-- design -->
            <section id="content2" class="tab-content text-left">
                <div class="d-grid grid-col-3">
                    <?php 
                         $query = "SELECT * FROM project WHERE project='design'";
                         $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                         while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="product">
                        <a href="assets/images/project/<?= $row['gambar']?>" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/project/<?= $row['gambar']?>" class="img-responsive" alt="" />
                            </figure>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </section>

            <!-- photograpy  -->
            <section id="content3" class="tab-content text-left">
                <div class="d-grid grid-col-3">
                    <?php 
                         $query = "SELECT * FROM project WHERE project='photograpy'";
                         $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                         while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="product">
                        <a href="assets/images/project/<?= $row['gambar']?>" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/project/<?= $row['gambar']?>" class="img-responsive" alt="" />
                            </figure>
                        </a>                       
                    </div>
                    <?php } ?>
                </div>
            </section>

            <!-- art -->
            <section id="content4" class="tab-content text-left">
                <div class="d-grid grid-col-3">
                    <?php 
                         $query = "SELECT * FROM project WHERE project='art'";
                         $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                         while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="product">
                        <a href="assets/images/project/<?= $row['gambar']?>" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/project/<?= $row['gambar']?>" class="img-responsive" alt="" />
                            </figure>
                        </a>                   
                    </div>
                    <?php } ?>
                </div>
            </section>
        </div>
    </div> 
 <!-- grids block 5 -->

 <?php include('include/footer.php') ?>

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