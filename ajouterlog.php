<?php
include_once 'C:/xamppp/htdocs/EphoriaFest1/controller/logementController.php';

$loge=new logementController();
$log = new Logement($_POST['IDclient'],$_POST['Nom'],$_POST['Prenom'],$_POST['checkin'],$_POST['checkout'],$_POST['rooms'],$_POST['adults']);
$loge->ajouterLog($log);
    
?>