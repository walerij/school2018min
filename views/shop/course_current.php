<section id='features'>
    <?php 
    foreach ($courses as $course) { 
         $ident=0;
   
         ?>
        <?php foreach ($course->lesson as $lesson) {  
            
           if ($ident%2==0) 
           {
               $pos1='left';
               $pos2='right';
           }
           
           else
                {
               $pos1='right';
               $pos2='left';
           }
               
?>
            <div class="row feature video">

                <div class="six columns <?=$pos1?>">
                    <h3><?= $lesson->lesson ?></h3>

                    <p><?= htmlspecialchars($lesson->intro) ?>
                    </p>
                </div>

                <div class="six columns feature-media <?=$pos2?>">
                    <div class="fluid-video-wrapper">

                        <iframe src="https://www.youtube.com/embed/<?= $lesson->video ?>" width="480" height="260" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
            </div>
        </div>

    </div>
    <?php $ident++;
        }
    }
    ?>
</section>

