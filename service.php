<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/13/2020
 * Time: 5:25 PM
 */


include "php/db_connect.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Skin Treat Bd - Enterprise</title>
    <link rel="icon" href="images/handshake5f22b37783c45.svg">

</head>
<style>
    #main_nav ul li{
        text-align: center;
    }
    #main_nav ul li a{
        font-size: 15px;
        color: black;
        font-weight: 500;
        padding: 12px;
        text-transform: uppercase;
        margin-right: 12px;
    }
    #main_nav ul li a.active{
        color: green;

    }
    #main_nav ul li a:hover{
        color: #1BBD36;
        transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
    }
    .banner{
        background-image: url("images/banner.JPG");
        background-attachment: fixed;
        height: 500px;
        width: 100%;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        opacity: 2.9;

    }
    .div_banner{
        height: 500px;
        width: 100%;

    }
    .service{
        background-color: #F7F9F8;
    }
    .cardImage{
        height: 150px;
        width: 150px;
        border-radius: 50%;
    }
</style>
<body>
<section class="menu">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #FFF343">
        <a class="navbar-brand font-weight-bold" href="index.php" ><span><img src="images/handshake5f22b37783c45.svg" style="height: 30px"></span> <span class="ml-2" style="font-family: 'Arial Rounded MT Bold',Arial,sans-serif; font-weight: 700">skin treat bd</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Mission</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Contact</a>
                </li>
                <li>
                    <a class="nav-link" href="index.php" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-location-arrow"></i></a>
                </li>
                <li>
                    <a class="nav-link" href="index.php" data-toggle="modal" data-target="#contact_modal"><i class="far fa-envelope"></i></a>
                </li>
                <li>
                    <a class="nav-link" href="index.php" data-toggle="modal" data-target="#phone"> <i class="fas fa-phone"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</section>

<section class="banner" id="home">
    <div class="div_banner" style="opacity: .9; background:   rgba(0, 0, 0, 0.5);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div style="margin-top: 270px">
                        <h2 class="text-white float-right font-weight-bold font-italic" style="font-size: 70px; font-weight: 700; text-shadow: 5px 5px 3px #000; ">ENTERPRISE <br/>
                            <span style="font-size: 37px; text-shadow: snow; font-weight: 500; float: right; line-height: 50px">FOR HEALYHY SKIN</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <?php
        if (isset($_GET['service_id'])){
            $id = $_GET['service_id'];

            $sql = "SELECT * FROM services WHERE service_id = '$id'";
            $res = mysqli_query($connect, $sql);

            $data = mysqli_fetch_assoc($res);
        }
    ?>
<section class="service" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 mb-5">
                <h3 class="text-uppercase mt-5 p-3 text-center"><span class="p-3" style="border-bottom: 3px solid #069390; margin-top: 10px"><?php echo $data['title'];?></span></h3>
                <div class="col-md-3 col-sm-12 float-left mt-3">
                    <img class="img-fluid" src="images/<?php echo $data['image'];?>" alt="card image" style="height: 300px; width: 100%">
                </div>
                <div class="col-md-9 col-sm-12 float-left mt-3">
                    <p><?php echo $data['application'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="footer bg-dark" style="height: 80px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 float-left">
                <div class="p-2 text-white">
                    <label>skin treat bd</label><br/>
                    <label>Copyright © 2020 All rights reserved</label>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 float-left">
                <div class="text-white mt-4">
                    <label class="float-right"><span><a class="ml-2 text-decoration-none text-white" id="#home" href="#">Home</a></span> <span><a class="ml-2 text-decoration-none text-white" id="#services" href="#">Services</a></span> <span><a class="ml-2 text-decoration-none text-white" id="#about" href="#">About</a></span> <span><a class="ml-2 text-decoration-none text-white" id="#contact" href="#">Contact</a></span></label>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>


<!--//map-->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-center text-white">
                <h5 class="modal-title" id="exampleModalLongTitle">Our Location</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mt-5 mb-5 text-center">
                    <label class="text-dark" style="font-size: 30px; font-weight: 700"><i class="fas fa-location-arrow"></i> Dhaka, Dhaka Division, Bangladesh</label><br/>
                    <label style="font-size: 20px; font-weight: 500">119/3 malibag 1st lane</label><br/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




<!--//contact-->
<div class="modal fade" id="contact_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="exampleModalLongTitle">Contact Wth Us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mt-5 mb-5 text-center">
                    <form action="" method="post">
                        <div class="form-group col-md-6 col-sm-12 float-left">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6 col-sm-12 float-left">
                            <input type="text" name="phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 float-left">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 float-left">
                            <textarea name="message" placeholder="Message" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 float-left">
                            <input type="submit" name="btn" class="btn btn-primary btn-block" value="CONTACT US">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!--//phone-->
<div class="modal fade" id="phone" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-white bg-info">
                <h5 class="modal-title" id="exampleModalLongTitle">Our Phone Number</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mt-5 mb-5 text-center">
                    <label class="text-dark" style="font-size: 30px; font-weight: 700"><i class="fas fa-phone"></i>  +8801722511030</label><br/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
