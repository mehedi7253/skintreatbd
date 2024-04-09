<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 11/13/2020
 * Time: 10:35 AM
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
                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#mission">Mission</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li>
                    <a class="nav-link" href="#map" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-location-arrow"></i></a>
                </li>
                <li>
                    <a class="nav-link" href="#contact" data-toggle="modal" data-target="#contact_modal"><i class="far fa-envelope"></i></a>
                </li>
                <li>
                    <a class="nav-link" href="#phone" data-toggle="modal" data-target="#phone"> <i class="fas fa-phone"></i></a>
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
                            <span style="font-size: 37px; text-shadow: snow; font-weight: 500; float: right; line-height: 50px">FOR HEALTHY SKIN</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 mb-5">
                <h3 class="text-uppercase mt-5 p-3 text-center"><span class="p-3" style="border-bottom: 3px solid #069390; margin-top: 10px">Services</span></h3>

                <div class="col-md-12 col-sm-12 mt-3">

                    <?php
                        $sql_serv = "SELECT * FROM services";
                        $res_serv = mysqli_query($connect, $sql_serv);

                        while ($service = mysqli_fetch_assoc($res_serv)){?>
                            <div class="col-md-4 col-sm-12 mt-2 float-left">
                                <div class="card" style="background-color: #EBEBEB; border-top: 3px solid #069390; border-radius: 10px">
                                    <div class="card-body text-center">
                                        <p><img class="img-fluid cardImage" src="images/<?php echo $service['image'];?>" alt="card image"></p>
                                        <br/>
                                        <p class="font-weight-bold">Price : <?php echo number_format($service['price'], 2);?> T.K <sup class="text-danger">Available</sup></p>
                                        <strong><?php echo $service['title'];?></strong><br/>
                                        <label class="pt-3"><?php echo $service['short_desc'];?></label>
                                    </div>
                                    <div class="card-footer">
                                        <a class="btn btn-info float-left" href="book.php?book=<?php echo $service['service_id'];?>">Buy Now</a>
                                        <a class="btn btn-secondary float-right" href="service.php?service_id=<?php echo $service['service_id'];?>">Read More</a>
                                    </div>
                                </div>
                            </div>
                         <?php }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="about" style="background-color: #EBEBEB" id="about">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 mt-2 mb-5">
                <h3 class="text-uppercase mt-5 p-3 text-center"><span class="p-3" style="border-bottom: 3px solid #069390; margin-top: 10px">About</span></h3>

                <div class="col-md-6 col-sm-12 float-left mt-3 mb-5">
                    <section class="Writtenpart">

                    <?php
                        $sql_con = "SELECT * FROM aboutus";
                        $res_con = mysqli_query($connect, $sql_con);

                        $data = mysqli_fetch_assoc($res_con);
                    ?>
                        <div>
                            <label class="text-dark" style="text-align: justify;"><?php echo $data['Description']?></php></label><br/>
                        </div>                        
                   
                    </section>
                </div>
                <div class="col-md-6 col-sm-12 float-left mt-3 mb-5">
                    <section class="slier">
                        <?php
                        $sql = "SELECT * FROM sliders";  // select all slider from databse
                        $res = mysqli_query($connect, $sql); // connect with query and database
                        $numrow = mysqli_num_rows($res);
                        ?>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php
                                // view slider
                                for ($i=1; $i<=$numrow; $i++ ) {
                                    echo "<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"$i++\"></li>";
                                }
                                ?>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <?php
                                for ($i=1; $i<=$numrow; $i++ ) {
                                    $row = mysqli_fetch_assoc($res);

                                    ?>

                                    <?php
                                    if ($i == 1) { ?>
                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid" src="<?php echo "images/" . $row["image"]; ?>" alt="First slide" width="100%" style="height: 300px">
                                        </div>

                                    <?php } else { ?>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" src="<?php echo "images/" . $row["image"]; ?>" alt="Second slide" width="100%" style="height: 300px">
                                        </div>
                                    <?php }
                                }
                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mission" style="background-color: #F7F9F8" id="mission">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 mt-2 mb-5">
                <h3 class="text-uppercase mt-5 p-3 text-center"><span class="p-3" style="border-bottom: 3px solid #069390; margin-top: 10px">Our Mission</span></h3>

                <div class="col-md-12 col-sm-12 float-left mt-3 mb-5">
                    <section class="Writtenpart">

                    <?php
                        $sql_con = "SELECT * FROM mission";
                        $res_con = mysqli_query($connect, $sql_con);

                        $data = mysqli_fetch_assoc($res_con);
                    ?>
                        <div>
                            <label class="text-dark" style="text-align: justify;"><?php echo $data['Description']?></php></label><br/>
                        </div>                        
                   
                    </section>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="contact" style="background-color:#EBEBEB" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 mt-2 mb-5">
                <h3 class="text-uppercase mt-5 p-3 text-center"><span class="p-3" style="border-bottom: 3px solid #069390; margin-top: 10px">Contact</span></h3>

                <div class="col-md-6 col-sm-12 float-left mt-5 mb-5">
                    <?php
                        $sql_con = "SELECT * FROM contatc_info ORDER BY id DESC";
                        $res_con = mysqli_query($connect, $sql_con);

                        $data = mysqli_fetch_assoc($res_con);
                    ?>

                    <div class="text-center">
                        <label class="text-dark" style="font-size: 20px; font-weight: 500"><?php echo $data['address']?></php></label><br/>
<!--                        <label style="font-size: 15px; font-weight: 500">119/3 malibag 1st lane</label><br/>-->
                        <label style="color: #1F9D9B; font-size: 15px; font-weight: 500"> <i class="fas fa-phone"></i> +<?php echo $data['phone']?></php></label><br/>
                        <label style="color: #1F9D9B; font-size: 15px; font-weight: 500"><i class="far fa-envelope"></i> <?php echo $data['email']?></php></label><br/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 float-left mt-5 mb-5">
                    <p>
                        <?php
                        if (isset($_POST['btn'])){
                            $name = $_POST['name'];
                            $phone = $_POST['phone'];
                            $email = $_POST['email'];
                            $msg   = $_POST['message'];

                            if ($name && $phone && $email && $msg){
                                $create = @date('Y-m-d H:i:s');

                                $contact = "INSERT INTO contact (name, phone, email, message, date) VALUES ('$name', '$phone', '$email', '$msg', '$create')";
                                $res_cont = mysqli_query($connect, $contact);

                                echo "<span class='text-success font-weight-bold ml-3'>Message Sent Successful</span>";
                            }else{
                                echo "<span class='text-danger ml-3 font-weight-bold'>Message Sent Failed...!!</span>";
                            }
                        }
                        ?>
                    </p>
                    <form action="" method="post">
                        <div class="form-group col-md-6 col-sm-12 float-left">
                            <input type="text" name="name" class="form-control" required placeholder="Name">
                        </div>
                        <div class="form-group col-md-6 col-sm-12 float-left">
                            <input type="text" name="phone" class="form-control" required placeholder="Phone">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 float-left">
                            <input type="email" name="email" class="form-control" required placeholder="Email">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 float-left">
                          <textarea name="message" placeholder="Message" class="form-control" required></textarea>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 float-left">
                            <input type="submit" name="btn" class="btn btn-primary btn-block" value="CONTACT US">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="map" id="map">
    <iframe src="https://maps.site123.com/include/globalMapDisplay.php?q=Dhaka%2C+Dhaka+Division%2C+Bangladesh&amp;z=15&amp;l=en&amp;ilfc="" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>">
    </iframe>
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