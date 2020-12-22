<?php
    session_start();
    $id =  $_SESSION["userUpdateID"];
    $conn = mysqli_connect("localhost", "root", "", "studentinfo");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo $_POST['name'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $courses = $_POST['course'];
    // echo $id;

    $sql = "UPDATE stdregistration SET fname = '{$name}', email = '{$email}',phonenumber = '{$phonenumber}',addres ='{$address}', gender ={$gender},courses ={$courses} WHERE id = {$id} ";
    $result =  mysqli_query($conn,$sql) or die("Update is not complited somethings is wrong");
    if (mysqli_query($conn, $sql)) {
        echo "Record updateded successfully";
        header("Location:viewdata.php");
    } 
    else {
        echo '<script language="javascript">';
        echo 'alert("Somethings is wrong record is not Updated")';
        echo '</script>';
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
