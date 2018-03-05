Мои подписки
<?php
echo ' '.$access_user[$user->email] ;

foreach ($access_user as $access) {
    foreach ($access->course as $course) {
        echo '<p>' . $course->courl . ' ' . $course->course . '</p>';
    }
}
?>
