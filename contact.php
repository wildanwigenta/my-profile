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

    <title>Contact</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>

<?php include('include/navbar.php') ?>
<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg">
    <div class="container py-5">
      <p><a href="index.php">Home</a> &nbsp; / &nbsp;<a href="contact.php"> Contact</a></p>
     </div>
  </div>
</section>
<!-- contact -->
<section class="w3l-contacts-12" id="contact">
    <div class="contact-top pt-5">
        <div class="container py-md-3">
            
            <div class="row cont-main-top">
               <!-- contact form -->
               <div class="contacts12-main col-lg-6 ">
                   
                <form action="admin/pages/contact/aksi/aksi_tambah.php" method="post" class="main-input">
                    
                    <div class="top-inputs d-grid">
                        <input type="text" placeholder="Name" name="nama" id="w3lName" required="">
                       
                    </div>
                    <input type="email" name="email" placeholder="Email" id="w3lSender" required="">
                   
                    <textarea placeholder="Message" name="pesan" id="w3lMessage" required=""></textarea>

                    <div class="text-right">
                        <button type="submit" class="btn btn-theme2">Submit Now</button>
                    </div>
                </form>
            </div>
            <!-- //contact form -->
                <!-- contact address -->
                <?php 
                include('admin/include/konek.php');
                $query = "SELECT * FROM alamat";
                $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                     $row = mysqli_fetch_array($result);
                    ?>
                <div class="contact col-lg-6 mt-lg-0 mt-5">
                    <div class="cont-subs">
                        <div class="cont-add">
                            <div class="cont-add-lft">
                                <span class="fa fa-map-marker" aria-hidden="true"></span>
                           </div>
                           <div class="cont-add-rgt">
                            <p class="contact-text-sub"><?= $row['alamat']?></p>
                        </div>
                      
                    </div>
                        <div class="cont-add add-2">
                            <div class="cont-add-lft">
                                <span class="fa fa-envelope" aria-hidden="true"></span>
                           </div> 
                           <div class="cont-add-rgt">
                          <a href="mailto:<?= $row['email']?>">
                                <p class="contact-text-sub"><?= $row['email']?></p>
                            </a>
                        </div>
                       
                    </div>
                        <div class="cont-add">
                            <div class="cont-add-lft">
                                <span class="fa fa-phone" aria-hidden="true"></span>
                           </div>
                            <div class="cont-add-rgt">
                                 <a href="tel:<?= $row['telp']?>">
                                    <p class="contact-text-sub"><?= $row['telp']?></p>
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //contact address -->
                 
            </div>
        </div>
        <!-- map -->
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1661.2948409451533!2d110.31472422011811!3d-7.973374924618614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7b001a6c14ae8f%3A0x32c108c87670ccee!2s28G7%2BRWC%2C%20Methuk%2C%20Donotirto%2C%20Kretek%2C%20Bantul%20Regency%2C%20Special%20Region%20of%20Yogyakarta%2055772!5e0!3m2!1sen!2sid!4v1656576729332!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- //map -->
    </div>
</section>
<!-- //contact -->
 
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


