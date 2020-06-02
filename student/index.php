<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Online Teaching Platform</title>
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
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="post-section">
        <div class="container">
       


        <?php
            include('../db.php');

            $query = "SELECT * FROM questions ORDER BY que_id DESC LIMIT 6 ";
            $result = mysqli_query($con,$query);
            if(!$result){
                die("Query failed!" . mysqli_error($con));
            }
            while($row = mysqli_fetch_assoc($result)){		
                $que_title = $row['que_title'];	
                $que_std_id = $row['que_std_id'];	
                $que_date = $row['que_date'];	
                $que_description = $row['que_description'];	
            
            ?>
                <div class="post-container d-flex">
                    <a href="">
                        <div class="post-box">
                            <div class="post-profile">
                                <img src="../images/post-profile.png" alt="Profile Image">
                                <?php 
                                    $sql = "SELECT std_name FROM students WHERE std_id='{$que_std_id}'"; 
                                    $result2 = mysqli_query($con,$sql);
                                    if(!$result2){
                                        die("Query failed!" . mysqli_error($con));
                                    }
                                    $row2 = mysqli_fetch_array($result2);
                                    $name = $row2['std_name'];
                                ?>
                                <h5><?php echo"{$name}"?></h5>
                            </div>
                            <div class="post">
                                <div class="post-date">
                                        <span><?php $time = strtotime($que_date);$myFormatForView = date("g:ia j F Y", $time); ?></span>
                                         <span><?php echo"{$myFormatForView}"?></span>
                                </div>
                                <h1> <?php echo"{$que_title}"?> </h1>
                                <p><?php echo"{$que_description}"?></p>
                            </div>
                        </div>
                    </a>
                </div>

            <?php } ?>

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