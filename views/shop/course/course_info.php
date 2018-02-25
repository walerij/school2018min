<?php// foreach ($course as $course_) { ?>
<div class="panel panel-warning">
    <div class="panel-heading">
        <h2> <?=$course->course?> </h2>
    </div>
    <div class="panel-body">
        <div>
            <div class="alert alert-success">
                <?=$course->info?>
            </div>
        </div>
        <div class="thumbnail" style="height: 29em" >
            <img src="https://www.videosharp.info/data/img/shop/<?=$course->courl?>.png" alt="game2" style="height: 27em">
        </div>
        <div class="btn-group btn-group-justified">
            <a href="#" class="btn btn-success">
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
<?php //}?>