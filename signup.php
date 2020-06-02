<?php
    include('./db.php');

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $gender = $_POST['gender'];
        $dept = $_POST['dept'];
        $create_datetime = date("Y-m-d H:i:s");

        $query    = "INSERT INTO students (std_id, std_name, std_email, std_password, std_gender, std_dept , std_date) VALUES ('$id', '$name', '$email','$password', '$gender', '$dept', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3>";
        } else {
            echo "<div class='form'>
                  <h3>Failed</h3>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | Online Teaching Platform</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="container d-flex">
                <div class="nav-left">
                    <ul>
                        <li><a href="./">Online Teching Platform</a></li>
                    </ul>
                </div>
                <div class="nav-right">
                    <ul class="nav-menu d-flex">
                        <li><a href="instructor.php">Instructor</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <section class="signup-section">
        <div class="container">
            <form class="form-container" method="POST">

                <input type="text" name="name" placeholder="Name">

                <input type="email" name="email" placeholder="Email">

                <input type="text" name="id" placeholder="University Id">

                <input type="password" name="password" placeholder="Password">

                <span>Gender:</span>
                <input type="radio" name="gender" value="male" id="male" checked>
                <label for="male">Male</label>
                <input type="radio" name="gender" value="female" id="female">
                <label for="female">Female</label>

                <span>|| Department:</span>
                <input type="radio" name="dept" value="cse" id="cse" checked>
                <label for="cse">CSE</label>
                <input type="radio" name="dept" value="eee" id="eee">
                <label for="eee">EEE</label>
                <input type="radio" name="dept" value="textile" id="textile">
                <label for="textile">Textile</label>
                <input type="submit" name="submit" value="Registration">
            </form>
        </div>
    </section>

    <footer>
        <div class="footer">
            <div class="container">
                <p>&copy; Copyright 2020 Tanvir Ahammed</p>
            </div>
        </div>
    </footer>
</body>
</html>