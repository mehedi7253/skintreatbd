<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/13/2020
 * Time: 4:20 PM
 */
    include "../php/db_connect.php";

    session_start();

    if (!isset($_SESSION['email'])){
        header('Location: index.php');
    }

    if (isset($_GET['message'])){
        $id = $_GET['message'];

        $sql = "DELETE FROM contact WHERE  id = $id";
        $res = mysqli_query($connect, $sql);


        $_SESSION['success'] = 'Delete Successful';
        header('Location: dashboard.php');
    }

    if (isset($_GET['service'])){
        $s_id = $_GET['service'];

        $sql_ser = "DELETE FROM services WHERE  service_id = '$s_id'";
        $res_ser = mysqli_query($connect, $sql_ser);


        $_SESSION['success2'] = 'Delete Successful';
        header('Location: manage_service.php');
    }

    if (isset($_GET['aboutus'])){
        $s_id = $_GET['aboutus'];

        $sql_ser = "DELETE FROM aboutus WHERE  ID = '$s_id'";
        $res_ser = mysqli_query($connect, $sql_ser);


        $_SESSION['success2'] = 'Delete Successful';
        header('Location: Manage_AboutUs.php');
    }
    if (isset($_GET['mission'])){
        $s_id = $_GET['mission'];

        $sql_ser = "DELETE FROM Mission WHERE  ID = '$s_id'";
        $res_ser = mysqli_query($connect, $sql_ser);


        $_SESSION['success2'] = 'Delete Successful';
        header('Location: ManageMission.php');
    }

    if (isset($_GET['delete_slider'])){
        $slider_id = $_GET['delete_slider'];

        $sql_ser = "DELETE FROM sliders WHERE  id = '$slider_id'";
        $res_ser = mysqli_query($connect, $sql_ser);


        $_SESSION['success2'] = 'Delete Successful';
        header('Location: manage_slider.php');
    }

    if (isset($_GET['delete_contact'])){
        $contact_id = $_GET['delete_contact'];

        $sql_ser = "DELETE FROM contatc_info WHERE  id = '$contact_id'";
        $res_ser = mysqli_query($connect, $sql_ser);


        $_SESSION['success'] = 'Delete Successful';
        header('Location: manage_contact.php');
    }




     if (isset($_POST['service_id'])){
            $service_id = $_POST['service_id'];

            $sql_tour = "SELECT * FROM services WHERE service_id = $service_id";
            $res_tour = mysqli_query($connect, $sql_tour);

            $row = mysqli_fetch_assoc($res_tour);

            echo json_encode($row);
        }

        if (isset($_POST['id'])){
            $tour_id = $_POST['id'];

            $sql_tour2 = "SELECT * FROM services WHERE service_id = $tour_id";
            $res_tour2 = mysqli_query($connect, $sql_tour2);

            $row = mysqli_fetch_assoc($res_tour2);

            echo json_encode($row);
    }

    if (isset($_POST['ID'])){
        $mission_id = $_POST['ID'];

        $sql_mission = "SELECT * FROM mission WHERE ID = $mission_id";
        $res_mission = mysqli_query($connect, $sql_mission);

        $row = mysqli_fetch_assoc($res_mission);

        echo json_encode($row);
    }


    if (isset($_POST['about_us_id'])){
        $about_id = $_POST['about_us_id'];

        $sql_aboutus = "SELECT * FROM aboutus WHERE about_us_id  = $about_id";
        $res_aboutus = mysqli_query($connect, $sql_aboutus);

        $row = mysqli_fetch_assoc($res_aboutus);

        echo json_encode($row);
    }






?>

