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