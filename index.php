<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/exc_picker_view.inc.php';

    require_once 'includes/dbh.inc.php';
    require_once 'includes/exc_picker_model.inc.php';
    require_once 'includes/exc_picker_contr.inc.php';

    $excercises = getAllExcercises($pdo);

    require_once 'includes/config_session.inc.php';

    $_SESSION['existing_excercises'] = $excercises;

    if(isset($_SESSION['user_id'])){
        $pickedExcercises = getAllPickedExcercises($pdo, $_SESSION['user_id']);

        $_SESSION['picked_excercises'] = $pickedExcercises;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Excercise Picker</title>
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
        <?php pickedExcercises();?>
    </div>
</body>
</html>

<?php
    $pdo = null;
    $stmt = null;

    die();
?>