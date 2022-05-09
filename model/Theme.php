<?php
include_once "/xampp/htdocs/EphoriaFest/config.php";

class Event
{
    private $id_theme, $nom_theme;

    function __construct($id_theme, $nom_theme)
    {
        $this->id_theme = $id_theme;
        $this->nom_theme = $nom_theme;
      
    }

    /**
     * Get the value of id_theme
     */
    public function getid_theme()
    {
        return $this->id_theme;
    }

    /**
     * Set the value of id_theme
     *
     * @return  self
     */
    public function setid_theme($id_theme)
    {
        $this->id_theme = $id_theme;

        return $this;
    }

    /**
     * Get the value of nom_theme
     */
    public function getnom_theme()
    {
        return $this->nom_theme;
    }

    /**
     * Set the value of nom_theme
     *
     * @return  self
     */
    public function setnom_theme($nom_theme)
    {
        $this->nom_theme = $nom_theme;

        return $this;
    }

   

   
   

    
}
