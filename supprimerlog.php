<?php
include_once 'C:/xamppp/htdocs/EphoriaFest1/controller/logementController.php';
$loge=new logementController();
$loge->supprimerLog($_GET["IDclient"]);
header('Location: afficherListeLog.php');
?>