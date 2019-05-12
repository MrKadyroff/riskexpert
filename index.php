<!DOCTYPE html>

<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Risk Expert</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
       
        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== SLIDER ==========-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="img/1920x1080/01.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="col-4 mx-auto">
                                <div class="row">

    <form action="index.php" method="POST" class="was-validated" >
    <div class="form-group">
        <ul class="field">
      <li><input type="text" class="form-control" id="lname" placeholder="Фамилия" name="lname" required></li>
      <li><input type="text" class="form-control" id="uname" placeholder="Имя" name="uname" required></li>
      <li><input type="text" class="form-control" id="fname" placeholder="Отчество" name="fname" required></li>
      <li><input type="text" class="form-control" id="mob" placeholder="Моб.телефон" name="mob" required></li>
      <li><input type="email" class="form-control" id="mail" placeholder="example@mail.com" name="mail" required></li>
<p></p><input type="submit" type="button" class="btn btn-success " value="Далее"> 
        </ul>
    </div>

                                    </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        

        <?php
error_reporting(0);

session_start();

$lname = $_POST['lname'];
$name = $_POST["uname"];
$fname = $_POST['fname'];
$mob = $_POST['mob'];
$mail = $_POST['mail'];
$db_table = "users"; 

$mysqli = new mysqli('localhost', 'root', '', 'calc');
if (mysqli_connect_errno()) {
mysqli_connect_error();
exit();

}

$result = $mysqli->query("INSERT INTO ".$db_table." (lname,name,fname,mob,mail) VALUES ('$lname','$name' , '$fname' , '$mob' , '$mail')");
if ($result == true){
$_SESSION['lname'] = $lname;
$_SESSION['uname'] = $uname;
$_SESSION['fname'] = $fname;
$_SESSION['mob'] = $mob;
$_SESSION['mail'] = $mail;
if (isset($_SESSION['lname'])){
    $_SESSION['mail'];
    header('Location: menu.php');
}

}else{
echo("Заполните поля");
}


        ?>
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>