<?php
foreach ($courses as $course) {
    $ident = 0;
    ?>  

    <section id="hero">

        <div class="row">

            <div class="twelve columns">

                <div class="hero-text">
                       <!--<h1 class="responsive-headline"><?= $course->course ?></h1>-->
                    <img src="https://www.videosharp.info/data/img/shop/<?= $course->access ?>.png" alt="" />
                    <h1><?= $course->info ?></h1>
                </div>

                <div class="buttons">
                    <a class="button trial" href="https://youtu.be/Pnba806UJv8" target="_blank">Демо видео</a>
                    <a class="button learn-more smoothscroll" href="#features">Записаться</a>
                </div>

                <div class="hero-image">
                   <!--<img src="/../images/chess_PNG8435.png" alt="" />
                    <img src="images/hero-image.png" alt="" />
                    https://www.videosharp.info/data/img/shop/game1.png
                    -->

                </div>

            </div>

        </div>

    </section> <!-- Homepage Hero end -->

    <section id='features'>

        <?php
        foreach ($course->lesson as $lesson) {

            if ($ident % 2 == 0) {
                $pos1 = 'left';
                $pos2 = 'right';
            } else {
                $pos1 = 'right';
                $pos2 = 'left';
            }
            ?>
            <div class="row feature video">

                <div class="six columns <?= $pos1 ?>">
                    <h3><?= $lesson->lesson ?></h3>

                    <p><?= htmlspecialchars($lesson->intro) ?>
                    </p>
                </div>

                <div class="six columns feature-media <?= $pos2 ?>">
                    <div class="fluid-video-wrapper">

                        <iframe src="https://www.youtube.com/embed/<?= $lesson->video ?>" width="480" height="260" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
                    </div>
                </div>

            </div>
        <?php
        $ident++;
    }
    ?>
    </section>


        <?php
    }
    ?>

