<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/signup_view.inc.php';
    require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Registration Form Update</title>
</head>
<body>
    <div class="main">
        <div class = "main-part">
            <div class="header">SIGN UP SYSTEM</div>
            <form class="form" action = "includes/signup.inc.php" method = "post">
                <?php
                    signup_inputs();
                ?>
                <button class="button">SIGN UP</button>
            </form>
            <?php
                check_signup_errors();
            ?>
        </div>

        <?php if(!isset($_SESSION["user_id"])){?>
            <div class = "main-part">
                <div class="header">LOG IN SYSTEM</div>
                <form class="form" action = "includes/login.inc.php" method = "post">
                    <label for = "username">Username</label>
                    <input type="text" name = "username" placeholder="Username">
                    <label for = "pwd">Password</label>
                    <input type="text" name = "pwd" placeholder="Password">
                    <button class="button">Log IN</button>
                </form>
                <!-- <?php
                    check_login_errors();
                ?> -->
            </div>
        <?php }
        else {
            ?>
            <div class = "main-part">
                <div class="header">LOGOUT</div>
                <form class="form" action = "includes/logout.inc.php" method = "post">
                    <button class="button">Logout</button>
                </form>
            </div>
        <?php }?>
        
    </div>
</body>
</html>