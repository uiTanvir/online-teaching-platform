<?php
    include('../db.php');
    if (isset($_POST['submit'])) {
        $id = $_SESSION['id'];
        $question = $_POST['question'];
        $description = $_POST['description'];
        $create_datetime = date("Y-m-d H:i:s");

        $query    = "INSERT INTO questions (que_title, que_description, que_date, que_std_id) VALUES ('$question', '$description', '$create_datetime', $id)";
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
    <title>Dashboard | Online Teaching Platform</title>
    <link rel="stylesheet" href="../style.css">
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
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <section class="dashboard-section">
        <div class="container d-flex">
            <div class="previous-question">
                <h1>Your previous question!</h1>
                <ul>
                    <li><a href="">Question no 1</a><span>Solved</span></li>
                    <li><a href="">Question no 1</a><span>Solved</span></li>
                    <li><a href="">Question no 1</a><span>Solved</span></li>
                    <li><a href="">Question no 1</a><span>Solved</span></li>
                </ul>
            </div>
            <div class="question-board">
                <form method="POST">
                    <label for="question">What's question on your mind?</label>
                    <input type="text" name="question" id="question" placeholder="Question title">
                    <textarea name="description" cols="30" rows="5" placeholder="Description"></textarea>
                    <input type="file" name="file">
                    <input type="submit" name="submit" value="Ask">
                </form>
            </div>
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