<?php

use yii\helpers\Url;
?>
<div class="panel panel-warning">
    <div class="panel-heading">
        <h2> <?= $course->course ?> </h2>
    </div>
    <div class="panel-body">
        <div>
            <div class="alert alert-success">
                <?= $course->info ?>
            </div>
        </div>
        <div class="thumbnail" style="height: 29em" >
            <img src="https://www.videosharp.info/data/img/shop/<?= $course->courl ?>.png" alt="game2" style="height: 27em">
        </div>

        <div>
            <div class="list-group">
                 <a href="#" class="list-group-item active">
                        <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp 
                         Наименование урока
                        <span class="badge">Длительность</span>
                    </a>
                <?php foreach ($course->lesson as $lesson) {
                    ?>

                    <a href="#" class="list-group-item">
                        <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp 
                         <?=$lesson->lesson?>
                        <span class="badge"><?=$lesson->video_length?></span>
                    </a>
                    <?}?>
                </div>
            </div>
            <div class="btn-group btn-group-justified">
                <?php
                $course_url = Url::to(['/shop/course/', 'id' => $course->id]);
                ?>
                <a href="<?= $course_url ?>" title="Подробнее о курсе" class="btn btn-success">
                <i class="glyphicon glyphicon-chevron-right">

                </i>
                Подробнее
            </a>
            <a href="#" class="btn btn-success">
                <i class="glyphicon glyphicon glyphicon-ok">

                </i>
                Купить
            </a>
            <a href="#" class="btn btn-default">
                <i class="glyphicon glyphicon glyphicon-ok">

                </i>
                Отказаться
            </a>
        </div>
    </div>
</div>
