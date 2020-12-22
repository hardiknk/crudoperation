<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud operation </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form action="savedata.php" method="post">
        <h1>Student Registration form</h1>
            <div class="form-group">
                <label for="name">Enter First Name</label>
                <input type="text" class="form-control" name="name" id="fname" required>
            </div>
            <div class="form-group">
                <label for="email">Enter Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="phonenumber">Enter Phone number </label>
                <input type="number" class="form-control" name="phonenumber" id="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Enter Address</label>
                <textarea class="form-control" name="address" id="address" rows="2" required></textarea>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label"> Select Gender :
                    <input class="form-check-input" type="radio" name="gender" id="male" value="1" checked> Male
                    <input class="form-check-input" type="radio" name="gender" id="female" value="2"> female
                    <input class="form-check-input" type="radio" name="gender" id="other" value="3"> Other
                </label>
            </div>
            <div class="form-group">
                <label for="course">Select Course</label>
                <select class="form-control" name="course" id="course">
                    <!-- <option value="0">-select course-</option> -->
                    <option value="1">computer engineering</option>
                    <option value="2">mechenical engineering</option>
                    <option value="3">civil engineering</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
    </div>
    </form>
</body>

</html>