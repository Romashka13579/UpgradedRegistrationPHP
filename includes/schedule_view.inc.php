<?php

declare(strict_types=1);

function schedule(){
    $days_of_the_week = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    foreach ($days_of_the_week as $day) {
        ?>
            <form class="schedule-day-box"  action="includes/schedule.inc.php" method="POST">
                <div class="schedule-day"><?php echo $day?></div>
                <input name="day" type="hidden" style="display:none;" value="<?php echo $day?>">
                <div class="schedule-buttons">
                    <button class="schedule-add-button">Add Excercise</button>
                    <button class="schedule-rest-button">Rest Day</button>
                </div>
            </form>
        <?php 
    }
}