<?php

declare(strict_types=1);

function excercises(){
    if(isset($_SESSION["existing_excercises"])){
        $excercises = $_SESSION["existing_excercises"];
        foreach ($excercises as $excercise) {
            ?>
                <form class="excercise-form" action="includes/exc_picker.inc.php" method="POST">
                    <div class="excercise">
                        <input name="exc_id" type="hidden" style="display:none;" value="<?php echo $excercise["id"]?>">
                        <div class="excercise-header"><?php echo $excercise["exc_name"]?></div>
                        <div class="excercise-line"></div>
                        <div class="excercise-description"><?php echo $excercise["exc_description"]?></div>
                        <button class="excercise-button">Pick Excercise</button>
                    </div>
                </form>
            <?php 
        }
        unset($_SESSION['existing_excercises']);
    }
}





function pickedExcercises(){
    if(isset($_SESSION['picked_excercises'])){
        $excercises = $_SESSION["picked_excercises"];
            ?>
            <div class="excercise-picker">
                <?php foreach ($excercises as $excercise) {?>
                <div class="excercise">
                        <div class="excercise-header"><?php echo $excercise["exc_name"]?></div>
                        <div class="excercise-line"></div>
                        <div class="excercise-description"><?php echo $excercise["exc_description"]?></div>
                    </div>
                <?php }?>
            </div>
        <?php

        unset($_SESSION['picked_excercises']);
    }
    else if(isset($_SESSION['picker_errors'])){
        $picker_errors = $_SESSION['picker_errors'];

        foreach ($picker_errors as $picker_error) {
        ?>
            <div class="picker-errors">
                <?php echo $picker_error;?>
            </div>
        <?php
        }

        unset($_SESSION['picker_errors']);
    }
}