<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/exc_picker_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Registration Form Update</title>
</head>
<body>
    <div class="main">
        <div class="header">
            <div class="menu-buttons">
                <?php if(!isset($_SESSION["user_id"])){?>
                <a href="registration.php"> 
                    <button class="logIn-button">Log In</button>
                </a>
                <?php }
                else{?>
                <form class="form" action = "includes/logout.inc.php" method = "post">
                    <button class="logOut-button">Log Out</button>
                </form>
                <?php }?>
                <a href="registration.php">
                    <button class="SignUp-button">Sign Up</button>
                </a>
            </div>
        </div>
        <?php excercises();?>
    </div>
</body>
</html>