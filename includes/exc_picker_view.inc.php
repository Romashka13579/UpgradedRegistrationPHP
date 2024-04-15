<?php

declare(strict_types=1);

function excercises(){
    if(isset($_SESSION["existing_excercises"])){
        $excercises = $_SESSION["existing_excercises"];
        ?>
            <div class="excercise-picker">
                <?php foreach ($excercises as $excercise) {?>
                <form class="excercise-form" action="includes/exc_picker.inc.php" method="POST">
                    <div class="excercise">
                        <input name="exc_id" type="hidden" style="display:none;" value="<?php echo $excercise["id"]?>">
                        <div class="excercise-header"><?php echo $excercise["exc_name"]?></div>
                        <div class="excercise-line"></div>
                        <div class="excercise-description"><?php echo $excercise["exc_description"]?></div>
                        <button class="excercise-button">Pick Excercise</button>
                    </div>
                </form>
                <?php }?>
            </div>
        <?php
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
                        <div class="excercise-line"><?php echo $excercise["exc_description"]?></div>
                    </div>
                <?php }?>
            </div>
        <?php
    }
}