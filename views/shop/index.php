<?php

use yii\helpers\Url;
?>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
    <ul class="nav nav-pills nav-stacked">
        <?php
        foreach ($courses as $course) {
            $url = Url::to(['/shop/index/', 'id' => $course->id]);
            ?>
            <li
            <?php if ($course->id == $active_id) { ?>
                    class="active"
                    <?}?>
                    ><a href="<?= $url ?>"  ><?= $course->course ?>

                    </a></li>

                <?php
            }
                /*
                  <li  class="active"><a href="#">Нанософт</a></li>
                  <li><a href="#">Новые технологии</a></li> */
                ?>
            </ul>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
        <?php
        foreach ($courses as $course) {

        if ($course->id == $active_id) {
            
         
            $this->beginContent('@app/views/shop/course/course_info.php', ['course' => $course]);
            ?>

                ...child layout content here...

            <?php
            $this->endContent();
        
        }
    }
    ?>
</div>



