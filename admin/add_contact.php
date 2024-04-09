<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/14/2020
 * Time: 10:57 PM
 */
include 'top_header.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/style/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Skin Treat Bd - Enterprise</title>
    <link rel="icon" href="../images/handshake5f22b37783c45.svg">

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

</style>
<body>
<section class="menu">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #FFF343">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="dashboard.php" ><span><img src="../images/handshake5f22b37783c45.svg" style="height: 30px"></span> <span class="ml-2" style="font-family: 'Arial Rounded MT Bold',Arial,sans-serif; font-weight: 700">Admin Panel</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav mr-auto">


                                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="Add_AboutUs.php">Add About Us</a>
                            <a class="dropdown-item" href="Manage_AboutUs.php">Manage</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="add_service.php">Add Services</a>
                            <a class="dropdown-item" href="manage_service.php">Manage Services</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Mission
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="Add_Mission.php">Add Mission</a>
                            <a class="dropdown-item" href="ManageMission.php">Manage Mission</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buy.php">Order</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Slider
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="add_slider.php">Add Slider</a>
                            <a class="dropdown-item" href="manage_slider.php">Manage Slider</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contact
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="add_contact.php">Add Address</a>
                            <a class="dropdown-item" href="manage_contact.php">Manage Address</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="add_new_admin.php">Add New Admin</a>
                            <a class="dropdown-item" href="manage_admins.php">Manage Admins</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $userdata['name'];?>  <img src="../images/<?php echo $userdata['image'];?>" style="height: 30px; width: 30px; border-radius: 50%">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="ChangePass.php">Change Password</a>
                            <a class="dropdown-item" href="update_profile.php">Update Profile</a>
                            <a class="dropdown-item" href="update_profile_pic.php">Change Profile Picture</a>
                            <a class="dropdown-item text-center" href="logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>


<section class="main_content" style="background-color: #c3e6cb">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5 mb-5">
                <div class="card mt-5 mb-5">
                    <div class="card-header">
                        <h3 class="text-center">Add Contact Address</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_POST['btn']))
                        {
                            $address = $_POST['address'];
                            $phone   = $_POST['phone'];
                            $email   = $_POST['email'];

                            if ($address == ''){
                                echo "<span class='text-danger'>Enter Address</span><br/>";
                            }elseif ($phone == ''){
                                echo "<span class='text-danger'>Enter Phone Number</span><br/>";
                            }elseif ($email == ''){
                                echo "<span class='text-danger'>Enter Email</span><br/>";
                            }else{

                                $sql = "INSERT INTO contatc_info (address, phone, email) VALUES ('$address', '$phone', '$email')";
                                $res = mysqli_query($connect, $sql);

                                if ($res){
                                    $_SESSION['success'] = 'Added Successful';
                                }else{
                                    $_SESSION['error'] = 'Added Failed';
                                }
                            }
                        }
                        ?>
                        <?php
                        if(isset($_SESSION['success'])){
                            echo "
                                        <div class='alert alert-success alert-dismissible'>
                                          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                          <h6><i class='icon fa fa-check'></i> Success!</h6>
                                          ".$_SESSION['success']."
                                        </div>
                                      ";
                            unset($_SESSION['success']);
                        }
                        if(isset($_SESSION['error'])){
                            echo "
                                <div class='alert alert-danger alert-dismissible'>
                                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                  <h6><i class='icon fa fa-check'></i> Error!</h6>
                                  ".$_SESSION['error']."
                                </div>
                              ";
                            unset($_SESSION['error']);
                        }
                        ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Enter Phone Number</label>
                                <input type="number" name="phone" class="form-control" placeholder="Enter Phone Number">
                            </div>
                            <div class="form-group">
                                <label>Enter Contact Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Contact Email">
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input type="submit" name="btn" class="btn btn-success" value="Add Now">
                            </div>
                        </form>
                    </div>
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
                    <label class="float-right"><span><a class="ml-2 text-decoration-none text-white" id="#services" href="#">Services</a></span> <span><a class="ml-2 text-decoration-none text-white" id="#contact" href="#">Contact</a></span></label>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.js"></script>
</body>
</html>






