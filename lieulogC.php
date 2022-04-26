<?php
include "C:/xamppp/htdocs/EphoriaFest1/model/lieu_log.php";


class lieulogC
{
    public function ajouterLog($log)
    {
        $db = config::getConnexion();
        $req = "INSERT INTO `lieu_log`(`id_log`, `nom_log`, `adresse`, `contact`) VALUES (:id_log,:nom_log,:adresse,:contact)";
        $sql = $db->prepare($req);
        $sql->bindValue(':id_log', $log->getid_log());
        $sql->bindValue(':nom_log', $log->getnom_log());
      
        $sql->bindValue(':adresse', $log->getadresse());
        $sql->bindValue(':contact', $log->getcontact());
    

        if ($sql->execute()) {
            $last_id = $db->lastInsertId();
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=afficherListeLog.php\">";
        } else
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=ajouter-log.php\">";
    }
    

    public function afficherLog()
    {
        $db = config::getConnexion();
        $result = "SELECT * FROM lieu_log";
        $sql = $db->query($result);
        return $sql;
    }

    public function supprimerLog($id_log)
    {
        $db = config::getConnexion();
        $sql = $db->prepare("DELETE FROM lieu_log WHERE id_log= $id_log");
        if ($sql->execute())
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=afficherListeLog.php\">";
        else
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=afficherListeLog.php\">";
    }

    public function modifierLog($log, $id_log)
    {
        $db = config::getConnexion();
        $req = "UPDATE `lieu_log` SET `nom_log`=:nom_log,`adresse`=:adresse,`contact`=:contact WHERE id_log=$id_log";
        $sql = $db->prepare($req);
      //  $sql->bindValue(':id_event', $event->getId_event());
        $sql->bindValue(':nom_log', $log->getNom_log());
      
        $sql->bindValue(':adresse', $log->getadresse());
      
        if ($sql->execute())
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum-detail.php?id=" . $id_log . "\">";
        else
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum-detail.php?id=" . $id_log . "\">";
    }

    
    function recupererLog($id_log)
    {
        $db = config::getConnexion();
        $sql="SELECT * from lieu_log where id_log=$id_log";
        
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
