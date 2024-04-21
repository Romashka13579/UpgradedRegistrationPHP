<!-- <?php
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
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/schedule.css">
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
        <div class="schedule">
            <form class="schedule-day-box"  action="includes/schedule.inc.php" method="POST">
                <div class="schedule-day">Monday</div>
                <input name="day" type="hidden" style="display:none;" value="<?php echo "Monday"?>">
                <div class="schedule-buttons">
                    <button class="schedule-add-button">Add Excercise</button>
                    <button class="schedule-rest-button">Rest Day</button>
                </div>
            </form>
            <form class="schedule-day-box">
                <div class="schedule-day">Tuesday</div>
                <input name="day" type="hidden" style="display:none;" value="<?php echo "Tuesday"?>">
                <div class="schedule-buttons">
                    <button class="schedule-add-button">Add Excercise</button>
                    <button class="schedule-rest-button">Rest Day</button>
                </div>
            </form>
            <form class="schedule-day-box">
                <div class="schedule-day">Wednesday</div>
                <input name="day" type="hidden" style="display:none;" value="<?php echo "Wednesday"?>">
                <div class="schedule-buttons">
                    <button class="schedule-add-button">Add Excercise</button>
                    <button class="schedule-rest-button">Rest Day</button>
                </div>
            </form>
            <form class="schedule-day-box">
                <div class="schedule-day">Thursday</div>
                <input name="day" type="hidden" style="display:none;" value="<?php echo "Thursday"?>">
                <div class="schedule-buttons">
                    <button class="schedule-add-button">Add Excercise</button>
                    <button class="schedule-rest-button">Rest Day</button>
                </div>
            </form>
            <form class="schedule-day-box">
                <div class="schedule-day">Friday</div>
                <input name="day" type="hidden" style="display:none;" value="<?php echo "Friday"?>">
                <div class="schedule-buttons">
                    <button class="schedule-add-button">Add Excercise</button>
                    <button class="schedule-rest-button">Rest Day</button>
                </div>
            </form>
            <form class="schedule-day-box">
                <div class="schedule-day">Saturday</div>
                <input name="day" type="hidden" style="display:none;" value="<?php echo "Saturday"?>">
                <div class="schedule-buttons">
                    <button class="schedule-add-button">Add Excercise</button>
                    <button class="schedule-rest-button">Rest Day</button>
                </div>
            </form>
            <form class="schedule-day-box">
                <div class="schedule-day">Sunday</div>
                <input name="day" type="hidden" style="display:none;" value="<?php echo "Sunday"?>">
                <div class="schedule-buttons">
                    <button class="schedule-add-button">Add Excercise</button>
                    <button class="schedule-rest-button">Rest Day</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<!-- <?php
    $pdo = null;
    $stmt = null;

    die();
?> -->