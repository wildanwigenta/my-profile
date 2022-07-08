<?php 
    session_start();

    if(!isset($_SESSION['id_admin'])){
        echo "
        <script>
        alert('Anda harus login dahulu');
        window.location.href='login.php';
        </script>
        ";
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
<?php include('include/sidebar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               <?php include('include/navbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                
                <?php 
                if (isset($_GET['page'])) {
                    switch ($_GET['page']) {

                        //Dashboard
                        case 'dashboard':
                            include('pages/dashboard.php');
                            break;

                        //about
                        case 'view_about':
                            include('pages/about/view_about.php');
                            break;
                        //tambah about
                        case 'tambah_about':
                            include('pages/about/tambah_about.php');
                            break;
                        //edit about
                        case 'edit_about':
                            include('pages/about/edit_about.php');
                            break;

                        //admin
                        case 'view_admin':
                            include('pages/admin/view_admin.php');
                            break;
                        //tambah admin
                        case 'tambah_admin':
                            include('pages/admin/tambah_admin.php');
                            break;
                        //edit admin
                        case 'edit_admin':
                            include('pages/admin/edit_admin.php');
                            break;


                        //alamat
                        case 'view_alamat':
                            include('pages/alamat/view_alamat.php');
                            break;
                        //tambah alamat
                        case 'tambah_alamat':
                            include('pages/alamat/tambah_alamat.php');
                            break;
                        //edit alamat
                        case 'edit_alamat':
                            include('pages/alamat/edit_alamat.php');
                            break;

                        //contact
                        case 'view_contact':
                            include('pages/contact/view_contact.php');
                            break;
                        //tambah contact
                        case 'tambah_contact':
                            include('pages/contact/tambah_contact.php');
                            break;
                        //edit contact
                        case 'edit_contact':
                            include('pages/contact/edit_contact.php');
                            break;

                        //hoby
                        case 'view_hoby':
                            include('pages/hoby/view_hoby.php');
                            break;
                        //tambah hoby
                        case 'tambah_hoby':
                            include('pages/hoby/tambah_hoby.php');
                            break;
                        //edit hoby
                        case 'edit_hoby':
                            include('pages/hoby/edit_hoby.php');
                            break;

                        //media
                        case 'view_media':
                            include('pages/media/view_media.php');
                            break;
                        //tambah media
                        case 'tambah_media':
                            include('pages/media/tambah_media.php');
                            break;
                        //edit media
                        case 'edit_media':
                            include('pages/media/edit_media.php');
                            break;

                        //profile
                        case 'view_profile':
                            include('pages/profile/view_profile.php');
                            break;
                        //tambah profile
                        case 'tambah_profile':
                            include('pages/profile/tambah_profile.php');
                            break;
                        //edit profile
                        case 'edit_profile':
                            include('pages/profile/edit_profile.php');
                            break;

                        //project
                        case 'view_project':
                            include('pages/project/view_project.php');
                            break;
                        //tambah project
                        case 'tambah_project':
                            include('pages/project/tambah_project.php');
                            break;
                        //edit project
                        case 'edit_project':
                            include('pages/project/edit_project.php');
                            break;

                        //skill
                        case 'view_skill':
                            include('pages/skill/view_skill.php');
                            break;
                        //tambah skill
                        case 'tambah_skill':
                            include('pages/skill/tambah_skill.php');
                            break;
                        //edit skill
                        case 'edit_skill':
                            include('pages/skill/edit_skill.php');
                            break;
                        
                    }

                }else{
                    include('pages/dashboard.php');
                }
                
                ?>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="auth/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!--JQuery JavaScript-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"</script>
    <script>
        $(document).ready( function () {
            $('#data').DataTable();
        } );
    </script>

</body>

</html>