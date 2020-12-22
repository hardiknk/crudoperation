<?php
    $id = $_REQUEST["id"];
    // echo "$id1";
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "studentinfo";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "DELETE FROM stdregistration WHERE id = $id";
        $result = mysqli_query($conn,$sql) or die("unable to fetch the record");
        if (mysqli_query($conn, $sql)) {
            // echo "Record deleted successfully";
            header("Location:viewdata.php");
        } 
        else {
            echo '<script language="javascript">';
            echo 'alert("Somethings is wrong record is not deleted")';
            echo '</script>';
            echo "Error deleting record: " . mysqli_error($conn);
        }
        mysqli_close($conn);

?>