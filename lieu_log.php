<?php
include_once "C:/xamppp/htdocs/EphoriaFest/config.php";

class lieu_log
{
    private $id_log, $nom_log, $adresse, $contact;

    function __construct($id_log, $nom_log, $adresse, $contact)
    {
        $this->id_log = $id_log;
        $this->nom_log = $nom_log;
      
        $this->adresse = $adresse;
        $this->contacte = $contact;
      
    }

    /**
     * Get the value of IDclient
     */
    public function getid_log()
    {
        return $this->id_log;
    }

    /**
     * Set the value of IDclient
     *
     * @return  self
     */
    public function setid_log($id_log)
    {
        $this->id_log = $id_log;

        return $this;
    }

    /**
     * Get the value of Nom_client
     */
    public function getnom_log()
    {
        return $this->nom_log;
    }

    /**
     * Set the value of Nom client
     *
     * @return  self
     */
    public function setnom_log($nom_log)
    {
        $this->nom_log = $nom_log;

        return $this;
    }

    /**
     * Get the value of theme_event
     */

    /**
     * Set the value of theme_event
     *
     * @return  self
     */
    
   

    /**
     * Get the value of artiste
     */
  
    /**
     * Set the value of artiste
     *
     * @return  self
     */
    

    /**
     * Get the value of adresse
     */
    public function getadresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */
    public function setadresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }



    /**
     * Set the value of contacte
     *
     * @return  self
     */
    public function getcontact()
    {
        return $this->contact;
    }

    /**
     * Set the value of checkin
     *
     * @return  self
     */
    public function setcontact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    
}
