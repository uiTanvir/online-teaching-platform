<?php
    include('./db.php');

    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $password = $_POST['password'];
        $query = "SELECT * FROM students WHERE std_id='$id' AND std_password='$password'";
        $results = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($results);
		if (mysqli_num_rows($results) == 1) {
            $_SESSION['id'] = $id;
            $_SESSION['std_name'] = $row['std_name'];
			header('location: ./student/index.php');
		} else {
			echo 'falied';
		}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Online Teaching Platform</title>
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
                        <li><a href="signup.php">Signup</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <section class="login-section">
        <div class="container">
            <form class="form-container" method="POST">
                <input type="text" name="id" placeholder="University Id">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="submit" value="Login">
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