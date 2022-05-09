<?php
include_once "/xampp/htdocs/EphoriaFest/config.php";

class Event
{
    private $id_event, $nom_event,  $theme_event, $artiste_event, $prix_event,$img;




    function __construct($id_event, $nom_event, $theme_event, $artiste_event, $prix_event)
    {
        $this->id_event = $id_event;
        $this->nom_event = $nom_event;
        $this->theme_event = $theme_event;
        $this->artiste_event = $artiste_event;
        $this->prix_event = $prix_event;
    }

    /**
     * Get the value of id_event
     */
    public function getId_event()
    {
        return $this->id_event;
    }

    /**
     * Set the value of id_event
     *
     * @return  self
     */
    public function setId_event($id_event)
    {
        $this->id_event = $id_event;

        return $this;
    }

    /**
     * Get the value of nom_event
     */
    public function getNom_event()
    {
        return $this->nom_event;
    }

    /**
     * Set the value of nom_event
     *
     * @return  self
     */
    public function setNom_event($nom_event)
    {
        $this->nom_event = $nom_event;

        return $this;
    }

    /**
     * Get the value of theme_event
     */
    public function getTheme_event()
    {
        return $this->theme_event;
    }

    /**
     * Set the value of theme_event
     *
     * @return  self
     */
    public function setTheme_event($theme_event)
    {
        $this->theme_event = $theme_event;

        return $this;
    }

    /**
     * Get the value of artiste
     */
    public function getArtiste_event()
    {
        return $this->artiste_event;
    }

    /**
     * Set the value of artiste
     *
     * @return  self
     */
    public function setArtiste_event($artiste_event)
    {
        $this->artiste_event = $artiste_event;

        return $this;
    }

    /**
     * Get the value of prix
     */
    public function getPrix_event()
    {
        return $this->prix_event;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */
    public function setPrix_event($prix_event)
    {
        $this->prix_event = $prix_event;

        return $this;
    }

    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }
    
}
