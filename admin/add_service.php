<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/13/2020
 * Time: 3:42 PM
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
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

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
                            Our Mission
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="Add_Mission.php">Add Mission</a>
                            <a class="dropdown-item" href="ManageMission.php">Manage Mission</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">message list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buy.php">Buy List</a>
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
            <div class="col-md-10 mx-auto mt-5 mb-5">
                <div class="card mt-5 mb-5">
                    <div class="card-header">
                        <h3 class="text-center">Add New Service</h3>
                    </div>
                    <div class="card-body">
                        <h3>
                            <?php
                            if (isset($_POST['btn'])){

                                $title  = $_POST['title'];
                                $s_desc = $_POST['short_desc'];
                                $l_desc = $_POST['application'];
                                $price  = $_POST['price'];
                                $image  = $_FILES['image']['name'];

                                if ($title == ''){
                                    echo "<span class='text-danger'>Pleas Enter Title</span><br/>";
                                }elseif ($s_desc == ''){
                                    echo "<span class='text-danger'>Pleas Enter Short Description</span><br/>";
                                }elseif ($l_desc == ''){
                                    echo "<span class='text-danger'>Pleas Enter Long Description</span><br/>";
                                }elseif ($price == ''){
                                    echo "<span class='text-danger'>Pleas Price</span><br/>";
                                }elseif ($image == ''){
                                    echo "<span class='text-danger'>Pleas Chose A Image </span><br/>";
                                }else{

                                    $fileinfo = PATHINFO($_FILES['image']['name']);
                                    $newFile = $fileinfo['filename']. "." . $fileinfo['extension'];
                                    move_uploaded_file($_FILES['image']['tmp_name'], "../images/" .$newFile);
                                    $location = $newFile;

                                    $create = @date('Y-m-d H:i:s');
                                    $service = "INSERT INTO services (title, short_desc, application, image, date, price) VALUES ('$title', '$s_desc', '$l_desc', '$image', '$create', '$price')";
                                    $res_serv = mysqli_query($connect, $service);

                                    if ($res_serv){
                                        $_SESSION['success'] = 'Service Added Successful';
                                    }else{
                                        $_SESSION['error'] = 'Service Added Failed';
                                    }

                                }
                            }
                            ?>
                        </h3>

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
                                <label> Title <sup class="text-danger font-weight-bold">*</sup></label>
                                <input type="text" name="title" placeholder="Enter Service Title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> Price <sup class="text-danger font-weight-bold">*</sup></label>
                                <input type="text" name="price" placeholder="Enter Price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> Shoert Description <sup class="text-danger font-weight-bold">*</sup></label>
                                <textarea name="short_desc" class="form-control" placeholder="Enter Service Short Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label> Long Description<sup class="text-danger font-weight-bold">*</sup></label>
                                <textarea name="application" id="application" class="form-control" placeholder="Enter Brief Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label> Select Image <sup class="text-danger font-weight-bold">*</sup></label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btn" class="btn btn-success col-md-4" value="Submit">
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

<script>
    CKEDITOR.replace('application',
        {
            height:300,
            resize_enabled:true,
            wordcount: {
                showParagraphs: false,
                showWordCount: true,
                showCharCount: true,
                countSpacesAsChars: true,
                countHTML: false,

                maxCharCount: 20}
        });
</script>
</body>
</html>