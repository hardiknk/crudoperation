<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View student record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>

    <table class="table table-striped table-inverse table-responsive">
        <h1 style="text-align:center">all student list </h1>
        <a href="day1crud.php" class="btn btn-primary">Add new record</a>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "studentinfo";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT id,fname,email,phonenumber,addres,gender,courses FROM stdregistration";
        $result = mysqli_query($conn,$sql) or die("unable to fetch the record");
        if (mysqli_num_rows($result) > 0) {
        ?>
            <thead >
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while ($row= mysqli_fetch_assoc($result)) { 
                ?>
                <tr>
                    <td scope="row"><?php echo $row['id']?> </td>
                    <td><?php echo $row['fname']?> </td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['phonenumber']?></td>
                    <td><?php echo $row['addres']?></td>
                    <td><?php if($row['gender']==1){echo "male";} elseif($row['gender']==2){echo "Female";} else {echo "other";} ?></td>
                    <td><?php if($row['courses']==1){echo "Computer Engineering";} elseif($row['courses']==2){echo "Mechenical Engineering";} else {echo "Civil Engineering";} ?></td>   
                    <td><a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="delete.php?id=<?php echo $row['id']?>" onclick="return confirm('Are You Sure to delete this record?')" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php  }?>
            </tbody>
    </table>
<?php } else { 
    echo '<script language="javascript">';
    echo 'alert("Somethings is wrong record is not found add some record")';
    echo '</script>';} ?>
</body>

</html>