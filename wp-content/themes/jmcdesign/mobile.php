<?php

$iPhone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
$iPad = strpos($_SERVER['HTTP_USER_AGENT'], "iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");

if ($iPhone || $iPad || $android) {
    header('Location: http://www.jmcdesignstudios.com/mobile/');
}
    
?>