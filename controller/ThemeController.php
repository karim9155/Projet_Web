<?php
include "/xampp/htdocs/EphoriaFest/model/Theme.php";


class ThemeController
{
    public function ajouterTheme($event)
    {
        $db = config::getConnexion();
        $req = "INSERT INTO `theme`(`id_theme`, `nom_theme`) VALUES (:id_theme,:nom_theme)";
        $sql = $db->prepare($req);
        $sql->bindValue(':id_event', $event->getid_theme());
        $sql->bindValue(':nom_event', $event->getnom_theme());
      

        if ($sql->execute()) {
            $last_id = $db->lastInsertId();
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=afficherListeEvent.php\">";
        } else
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=ajouter-event.php\">";
    }
    

    public function afficherTheme()
    {
        $db = config::getConnexion();
        $result = "SELECT * FROM theme";
        $sql = $db->query($result);
        return $sql;
    }

    public function supprimerTheme($id_theme)
    {
        $db = config::getConnexion();
        $sql = $db->prepare("DELETE FROM theme WHERE id_theme= $id_theme");
        if ($sql->execute())
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=afficherListeEvent.php\">";
        else
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=afficherListeEvent.php\">";
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
