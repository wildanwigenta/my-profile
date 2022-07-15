<section class="w3l-footer-29-main" id="footer">
  <div class="footer-29 text-center">
      <div class="container">
        
        <div class="main-social-footer-29">
        <?php 
            include('admin/include/konek.php');
            $query = "SELECT * FROM media";
            $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
            while ($row = mysqli_fetch_array($result)) {
         ?>
            <a href="<?= $row['link']?>" target="_blank" class="media"><img src="assets/images/media/<?= $row['gambar']?>" style="width:25px"></a>
        <?php } ?>
      </div>
          <div class="bottom-copies text-center">
              <p class="copy-footer-29">© 2020 My Website. All rights reserved | wildanwigenta.</a></p>
               
          </div>
      </div>
  </div>
   <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
              <span class="fa fa-angle-up"></span>
                 </button>
                 <script>
                     // When the user scrolls down 20px from the top of the document, show the button
                     window.onscroll = function () {
                         scrollFunction()
                     };
              
                     function scrollFunction() {
                         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                             document.getElementById("movetop").style.display = "block";
                         } else {
                             document.getElementById("movetop").style.display = "none";
                         }
                     }
              
                     // When the user clicks on the button, scroll to the top of the document
                     function topFunction() {
                         document.body.scrollTop = 0;
                         document.documentElement.scrollTop = 0;
                     }
                 </script>
                 <!-- /move top -->
</section>
<!-- // grids block 5 -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>