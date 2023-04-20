<?php
$kapcsolat = new mysqli('localhost', 'root', '', 'iphonetokok');
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

?>