<?php

declare(strict_types=1);

function signup_inputs(){
    ?>
    <label for = "username">Username</label>
    <?php
    if(isset($_SESSION['signup_data']["username"]) && !isset($_SESSION['signup_errors']["used_username"])){
        ?><input type="text" name = "username" placeholder="Username" value="<?php echo $_SESSION['signup_data']["username"] ?>"><?php
    }
    else{
        ?><input type="text" name = "username" placeholder="Username"><?php
    }
    ?>
    <label for = "pwd">Password</label>
    <input type="text" name = "pwd" placeholder="Password">
    <label for = "pwd">Email</label>
    <?php

    if(isset($_SESSION['signup_data']["email"]) && !isset($_SESSION['signup_errors']["email_used"]) && !isset($_SESSION['signup_errors']["not_valid_email"])){
        ?><input type="text" name = "email" placeholder="Email" value="<?php echo $_SESSION['signup_data']["email"]  ?>"><?php
    }
    else{
        ?><input type="text" name = "email" placeholder="Email"><?php
    }
}

function check_signup_errors() {
    if(isset($_SESSION['signup_errors'])){
        foreach ($_SESSION['signup_errors'] as $error) {
            ?>
                <div class="error">
                    <?php 
                        echo $error;
                    ?>
                </div>
            <?php
        }

        unset($_SESSION['signup_errors']);

    }else if(isset($_GET["signup"]) && $_GET["signup"] === "success"){
        echo "<br>";
        echo "SignUP success";
    }
}