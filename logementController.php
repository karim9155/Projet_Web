<?php
include "/xamppp/htdocs/EphoriaFest1/model/logement.php";


class logementController
{
    public function ajouterLog($log)
    {
        $db = config::getConnexion();
        $req = "INSERT INTO `logement`(`IDclient`, `Nom`, `Prenom`, `checkin`, `checkout`, `rooms`, `adults`) VALUES (:IDclient,:Nom,:Prenom,:checkin,:checkout,:rooms,:adults)";
        $sql = $db->prepare($req);
        $sql->bindValue(':IDclient', $log->getIDclient());
        $sql->bindValue(':Nom', $log->getNom());
      
        $sql->bindValue(':Prenom', $log->getPrenom());
        $sql->bindValue(':checkin', $log->getcheckin());
        $sql->bindValue(':checkout', $log->getcheckout());
        $sql->bindValue(':rooms', $log->getrooms());
        $sql->bindValue(':adults', $log->getadults());

        if ($sql->execute()) {
            $last_id = $db->lastInsertId();
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=afficherListeLog.php\">";
        } else
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=ajouter-log.php\">";
    }
    

    public function afficherLog()
    {
        $db = config::getConnexion();
        $result = "SELECT * FROM logement";
        $sql = $db->query($result);
        return $sql;
    }

    public function supprimerLog($IDclient)
    {
        $db = config::getConnexion();
        $sql = $db->prepare("DELETE FROM logement WHERE IDclient= $IDclient");
        if ($sql->execute())
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=afficherListeEvent.php\">";
        else
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=afficherListeEvent.php\">";
    }

    public function modifierLog($log, $IDclient)
    {
        $db = config::getConnexion();
        $req = "UPDATE `logement` SET `nom_event`=:nom_event,`theme_event`=:theme_event,`prix_event`=:prix_event WHERE id_event=$IDclient";
        $sql = $db->prepare($req);
      //  $sql->bindValue(':id_event', $event->getId_event());
        $sql->bindValue(':nom_event', $log->getNom_event());
      
        $sql->bindValue(':prix_event', $log->getPrix_event());
      
        if ($sql->execute())
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum-detail.php?id=" . $IDclient . "\">";
        else
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum-detail.php?id=" . $IDclient . "\">";
    }

    
    function recupererLog($IDclient)
    {
        $db = config::getConnexion();
        $sql="SELECT * from logement where IDclient=$IDclient";
        
        try{
        $log=$db->query($sql);
        return $log;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

   /* function getevenementbyID($id_event)
        {
            $requete = "select * from evenement where id_event=:id_event";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'id_event'=>$id_event
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }*/
    
        
}
