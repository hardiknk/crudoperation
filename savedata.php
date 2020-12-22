<?php
$name =  $_POST['name'];
$email =  $_POST['email'];
$phonenumber =  $_POST['phonenumber'];
$address =  $_POST['address'];
$gender =  $_POST['gender'];
$course =  $_POST['course'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentinfo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO stdregistration (fname,email,phonenumber, addres, gender, courses) 
        VALUES ('$name','$email','$phonenumber','$address',$gender,$course)";
        
if (mysqli_query($conn, $sql)) {
    header("Location:viewdata.php");
} else {
    echo '<script language="javascript">';
    echo 'alert("data not inserted successfully")';
    echo '</script>';
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
