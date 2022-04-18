<?php
include_once '../config.php';
include_once '../model/logement.php';
class logementc {
    function afficherlogement(){
        $sql="SELECT * FROM logement";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function supprimerlogement($IDclient){
        $sql=" DELETE FROM logement WHERE IDclient=:IDclient";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':IDclient' , $IDclient);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }



    function ajouterlogement($logement){

       $sql = "INSERT INTO logement(IDclient,Nom,Prenom,type_log,nbr_nuit)
                 VALUES (:IDclient, :Nom, :Prenom, :type_log, :nbr_nuit)";
    $db = config::getConnexion();
    var_dump($logement);
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'IDclient'=>$logement->getIDclient(),
            'Nom'=>$logement->getNom(),
            'Prenom'=> $logement->getPrenom(),
            'type_log'=>$logement->gettype_log(),
            'nbr_nuit'=>$logement->getnbr_nuit(),
        ]);
} catch (Exception $e){
    $e->getMessage();
}

    }




    
function recupererlogement($IDclient)
{
$sql="SELECT * from logement where
IDclient=$IDclient";
$db=config::getConnexion();
try{
    $query=$db->prepare($sql);
    $query->execute();
    $logement=$query->fetch();
    return $logement;

}
catch(Exception $e)
{die ('Erreur:'.$e->getMessage());
}
}

function modifierlogement ($logement, $IDclient)
{ 
try {
    $db= config::getConnexion();
    $query=$db->prepare(
    
           
 "UPDATE logement SET IDclient=:IDclient,Nom=:Nom,Prenom=:Prenom,type_log=:type_log,nbr_nuit=:nbr_nuit WHERE IDclient=:IDclient;"

);
$query->execute ([
    'IDclient'=>$logement->getIDclient(),
    'Nom'=>$logement->getNom(),
    'Prenom'=> $logement->getPrenom(),
    'type_log'=>$logement->gettype_log(),
    'nbr_nuit'=>$logement->getnbr_nuit(),
    'IDclient'=>$IDclient
]);    
echo $query->rowcount() . "records UPDATED SUCCESSFULLY <br>";
}
catch (PDOException $e){
$e->getMessage();
}

}
}
?>