<?php
include "/xampp/htdocs/EphoriaFest/model/Event.php";


class EventController
{
    public function ajouterEvent($event)
    {
        $db = config::getConnexion();
        $req = "INSERT INTO `evenement`(`nom_event`,`theme_event`, `artiste_event`, `prix_event`,img) VALUES (:nom_event,:theme_event,:artiste_event,:prix_event,:img)";
        $sql = $db->prepare($req);
        $sql->bindValue(':nom_event', $event->getNom_event());
        $sql->bindValue(':theme_event', $event->getTheme_event());
        $sql->bindValue(':artiste_event', $event->getArtiste_event());
        $sql->bindValue(':prix_event', $event->getPrix_event());
        $sql->bindValue(':img', $event->getImg());

        if ($sql->execute()) {
            $last_id = $db->lastInsertId();
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=afficherListeEvent.php\">";
        } else
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=ajouter-event.php\">";
    }
    

    public function afficherEvent()
    {
        $db = config::getConnexion();
        $result = "SELECT * FROM evenement";
        $sql = $db->query($result);
        return $sql;
    }

    public function searchEvent($str)
    {
        $db = config::getConnexion();
        $result = "SELECT * FROM evenement where nom_event like '%".$str."%' or artiste_event like '%".$str."%' or prix_event like '%".$str."%' ";
        $sql = $db->query($result);
        return $sql;
    }

    public function supprimerEvent($id_event)
    {
        $db = config::getConnexion();
        $sql = $db->prepare("DELETE FROM evenement WHERE id_event= $id_event");
        if ($sql->execute())
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=afficherListeEvent.php\">";
        else
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=afficherListeEvent.php\">";
    }

    public function modifierEvent($event, $id_event)
    {
        $db = config::getConnexion();
        $req = "UPDATE `evenement` SET `nom_event`=:nom_event,`theme_event`=:theme_event,`artiste_event`=:artiste_event,`prix_event`=:prix_event WHERE id_event=$id_event";
        $sql = $db->prepare($req);
      //  $sql->bindValue(':id_event', $event->getId_event());
        $sql->bindValue(':nom_event', $event->getNom_event());
        $sql->bindValue(':theme_event', $event->getTheme_event());
        $sql->bindValue(':artiste_event', $event->getArtiste_event());
        $sql->bindValue(':prix_event', $event->getPrix_event());
      
        if ($sql->execute())
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=afficherListeEvent.php\">";
        else
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=afficherListeEvent.php\">";
    }

    
    function recupererEvent($id_event)
    {
        $db = config::getConnexion();
        $sql="SELECT * from evenement where id_event=$id_event";
        
        try{
        $event=$db->query($sql);
        return $event;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function getevenementbyID($id_event)
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
        }
        public function afficherTheme()
        {
            $db = config::getConnexion();
            $result = "SELECT * FROM theme";
            $sql = $db->query($result);
            return $sql;
        }
    
        
}
