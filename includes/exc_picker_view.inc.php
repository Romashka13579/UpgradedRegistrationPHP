<?php

declare(strict_types=1);

function excercises(){
    if(isset($_SESSION["existing_excercises"])){
        $excercises = $_SESSION["existing_excercises"];
        foreach ($excercises as $excercise) {
            ?>
                <div class="excercise-picker">
                    <div class="excercise">
                        <div class="excercise-header"><?php $excercise["exc_name"]?></div>
                        <div class="excercise-line"></div>
                        <div class="excercise-description"><?php $excercise["exc_description"]?></div>
                        <form>
                            <button class="excercise-button">Pick Excercise</button>
                        </form>
                    </div>
                </div>
            <?php
        }
    }
    echo $_SESSION["existing_excercises"];
}