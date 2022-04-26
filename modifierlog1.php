<?php
include 'C:/xamppp/htdocs/EphoriaFest1/controller/logementController.php';
   



$log = new Logement($_POST['IDclient'],$_POST['Nom'],$_POST['Prenom'],$_POST['checkin'],$_POST['checkout'],$_POST['rooms'],$_POST['adults']);
$loge=new logementController();
$loge->modifierlog($log,$_POST['IDclient']);
?>