<?php




class Club {


// A MODIF
    private $id_club;
    private $adresse_club;
    private $cp_club;
    private $nompresident_club;
    private $nom_club;
    private $sigle_club;
    private $ville_club;


 	/* Fonction contructeur */ 

      function __construct($id_club, $adresse_club, $cp_club, $nompresident_club, $nom_club, $sigle_club, $ville_club) {
        $this->set_id_club($id_club) = $id_club;
        $this->set_adresse_club($adresse_club) = $adresse_club;
        $this->set_cp_club($cp_club) = $cp_club;
        $this->set_nompresident_club($nompresident_club) = $nompresident_club;
        $this->set_nom_club($nom_club) = $nom_club;
        $this->set_sigle_club($sigle_club) = $sigle_club;
        $this->set_ville_club($ville_club) = $ville_club;
    }


  	/* Fonctions setter */

    function set_id_club($id_club) {
        $this->id_club = $id_club;
    }

    function set_adresse_club($adresse_club) {
        $this->adresse_club = $adresse_club;
    }

    function set_cp_club($cp_club) {
        $this->cp_club = $cp_club;
    }

    function set_nompresident_club($nompresident_club) {
        $this->nompresident_club = $nompresident_club;
    }

    function set_nom_club($nom_club) {
        $this->nom_club = $nom_club;
    }

    function set_sigle_club($sigle_club) {
        $this->sigle_club = $sigle_club;
    }

    function set_ville_club($ville_club) {
        $this->ville_club = $ville_club;
    }


    /* Fonctions getter */

	 function get_id_club() {
        return $this->id_club;
    }

    function get_adresse_club() {
        return $this->adresse_club;
    }

    function get_cp_club() {
        return $this->cp_club;
    }

    function get_nompresident_club() {
        return $this->nompresident_club;
    }

    function get_nom_club() {
        return $this->nom_club;
    }

    function get_sigle_club() {
        return $this->sigle_club;
    }

    function get_ville_club() {
        return $this->ville_club;
    }


}


?>