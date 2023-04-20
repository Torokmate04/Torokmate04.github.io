<?php
include './csatolt.php';
    if(isset($_GET['id'])){
       $eredmeny = $kapcsolat -> query("select keptipus, kep from termek where id=".$_GET['id']);
        $sor = $eredmeny -> fetch_array();
        header("Content-type: ".$sor['keptipus']);
        echo $sor['kep'];
    }
?>