<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

        $errors = [];

        if(empty_inputs($username, $pwd)) {
            $errors["empty_inputs"] = "Fill in all the gaps";
        }
  
        $result = get_user($pdo, $username);

        if(not_existing_username($result)) {
            $errors["no_username"] = "Not existing username";
        }
        if(!not_existing_username($result) && wrong_pwd($pwd, $result["pwd"])) {
            $errors["wrong_pwd"] = "Wrong password";
        }

        require_once 'config_session.inc.php';

        if($errors){
            $_SESSION["login_errors"] = $errors;

            header("Location: ../index.php");
            die();
        }

        
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION['user_id'] = $result["id"];
        $_SESSION['user_username'] = htmlspecialchars($result["username"]);

        $_SESSION['last_regeneration'] = time();


        header("Location: ../index.php?login=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die($e->getMessage());
    }

}
else{
    header("Location: ../index.php");
    die();
}