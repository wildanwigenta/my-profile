<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/csss.css">
    <style>
        body{
            background-color:#CEFFD8;
        }
    </style>

    <title>CV</title>
</head>
<body>
    <div class="d-flex justify-content-center no-print" style="background-color:white; z-index:10;">
        <a href="" class="btn btn-style" onclick="window.print()">Cetak</a>
    </div>
    <div style="background-color:#22CD8A ; height:300px;">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="mt-3" style="color:white; font-size:45px;font-weight:700;letter-spacing: 2px;line-height:1.1;">Wildan Wigenta</h1>

                <div class="mt-5">    
                    <img class="img-fluid img-responsive" src="assets/images/profil.jpg" alt=" " style="width:200px;border-radius:1000px;">
                </div>

        </div>
    </div>
    <div style="background-color:#08A55E; height:23px;"></div>
        <div class="container mt-5" >
            <div class="row">
                <div class="col-md-5 col-sm-12 mt-3">
                <?php 
                    include('admin/include/konek.php');
                    $query = "SELECT * FROM cv";
                    $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                    <h5 class="title-style">Personal Info</h5>
                    <p class="mt-1" style="font-weight:700;">Name</p>
                    <p><?= $row['name']?></p>
                    <p class="mt-1" style="font-weight:700;">Email</p>
                    <p><?= $row['email']?></p>
                    <p class="mt-1" style="font-weight:700;">Nationality</p>
                    <p><?= $row['nationality']?></p>
                    <p class="mt-1" style="font-weight:700;">Gender</p>
                    <p><?= $row['gender']?></p>
                    <p class="mt-1" style="font-weight:700;">Current Job</p>
                    <p><?= $row['job']?></p>
                <?php } ?>

                    <h5 class="title-style mt-4">Skills</h5>
                    <section class="w3l-about ">
                        <div class="row mt-5 pt-3 col-12">
                            <?php 
                                include('admin/include/konek.php');
                                $query = "SELECT * FROM skill";
                                $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                                while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                <div class="col-10 skills-bar-grids mb-4 pb-2">
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
                    </section>
            

                
                    <!-- <p class="mt-1" style="font-weight:700;">Operating System</p>
                    <p>Windows</p>
                    <p class="mt-1" style="font-weight:700;">Database</p>
                    <p>Mysql</p>
                    <p class="mt-1" style="font-weight:700;">Framework</p>
                    <p>CSS Bootstrap</p>
                    <p class="mt-1" style="font-weight:700;">IDE</p>
                    <p>Visual Studio Code</p> -->

                </div>
                <div class="col-md-7 col-sm-12 mt-3">
                    <h5 class="title-style ">Project</h5>
                    <?php 
                    include('admin/include/konek.php');
                    $query = "SELECT * FROM project_cv";
                    $result = mysqli_query($konek, $query) or die(mysqli_error($konek));
                    while ($row = mysqli_fetch_array($result)) {
                    ?>

                        <div class="info">
                            <h6 class="info-title">YEAR</h6>
                            <h6 class="info-subtitle"><?= $row['year'] ?></h6>
                        </div>
                        <div class="info">
                            <h6 class="info-title">PROJECT</h6>
                            <h6 class="info-subtitle"><?= $row['project'] ?></h6>
                        </div>
                        <div class="info">
                            <h6 class="info-title">URL</h6>
                            <h6 class="info-subtitle"><?= $row['url'] ?><a href="#" target="_blank" style="text-decoration:none;"></a></h6>
                        </div>
                        <hr class="divider-cv">
                    <?php } ?>
                </div>
            </div>
        </div>
</body>
</html>