<section id='features'>
    <?php foreach ($courses as $course) { ?>
        <?php foreach ($course->lesson as $lesson) { ?>
            <div class="row feature video">

                <div class="six columns left">
                    <?= $lesson->lesson ?>

                    <p><?= htmlspecialchars($lesson->intro) ?>
                    </p>
                </div>

                <div class="six columns feature-media right">
                    <div class="fluid-video-wrapper">

                        <iframe src="https://www.youtube.com/embed/<?= $lesson->video ?>" width="480" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
            </div>
        </div>

    </div>
    <?
        }
    }
    ?>
</section>

