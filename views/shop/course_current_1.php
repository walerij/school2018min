
<?php foreach ($courses as $course) { ?>
    <div class="panel panel-warning">
        <div class="panel panel-heading">
            <?= $course->course ?>
        </div>
        <div class="panel-body">
            <div class="list-group">
                <?php foreach ($course->lesson as $lesson) {
                    ?>
                    <a href="#" class="list-group-item">
                        <div class="list-group-item-heading">
                            <h4><?=$lesson->lesson?></h4>
                        </div>
                        <div class="list-group-item-text">
                            <?=htmlspecialchars($lesson->intro)?>
                        </div>
                    </a>

                <?php }
                ?>
        </div>


    </div>
</div>
<?}?>

