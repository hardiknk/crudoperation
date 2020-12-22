<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud operation edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
        session_start();
        $id = $_REQUEST["id"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "studentinfo";
        $_SESSION['userUpdateID'] = $id;
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT id,fname,email,phonenumber,addres, gender,courses FROM stdregistration WHERE id = $id";
        $result = mysqli_query($conn, $sql) or die("unable to fetch the record");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <form action="update.php" method="post">
                    <h1>Student Update form</h1>
                    <div class="form-group">
                        <label for="name">Enter First Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['fname']; ?>" id="fname" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Enter Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phonenumber">Enter Phone number </label>
                        <input type="number" class="form-control" name="phonenumber" value="<?php echo $row['phonenumber']; ?>" id="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Enter Address</label>
                        <textarea class="form-control" name="address" id="address" rows="2" required><?php echo $row['addres'] ?></textarea>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label"> Select Gender :
                            <input class="form-check-input" type="radio" name="gender" id="male" value="1" <?php echo ($row['gender'] == 1) ? 'checked' : '' ?>> Male
                            <input class="form-check-input" type="radio" name="gender" id="female" value="2" <?php echo ($row['gender'] == 2) ? 'checked' : '' ?>> female
                            <input class="form-check-input" type="radio" name="gender" id="other" value="3" <?php echo ($row['gender'] == 3) ? 'checked' : '' ?>> Other
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="course">Select Course</label>
                        <select class="form-control" name="course" id="course">
                            <!-- <option value="0">-select course-</option> -->
                            <option value="1" <?php if ($row['courses'] == "1") echo 'selected="selected"'; ?>>computer engineering</option>
                            <option value="2" <?php if ($row['courses'] == "2") echo 'selected="selected"'; ?>>mechenical engineering</option>
                            <option value="3" <?php if ($row['courses'] == "3") echo 'selected="selected"'; ?>>civil engineering</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="viewdata.php" class="btn btn-danger">cancel</a>
    </div>
    </form>
<?php }
        } else {
            echo '<script language="javascript">';
            echo 'alert("something is wrong")';
            echo '</script>';
        }
        mysqli_close($conn); ?>
</body>

</html>