<?php



class Demandeur {



// A MODIF


    private $numlicense_adherent;
    private $adresseMail;
    private $cp;
    private $dateNaissance;
    private $nom;
    private $prenom;
    private $rue;
    private $ville;

  	/* Fonction contructeur */

    function __construct($id_demandeur, $mail_demandeur, $motdepasse_demandeur) {
        $this->set_id_demandeur($id_demandeur) = $id_demandeur;
        $this->set_mail_demandeur($mail_demandeur) = $mail_demandeur;
        $this->set_motdepasse_demandeur($motdepasse_demandeur) = $motdepasse_demandeur;
    }


  	/* Fonctions setter */

    function set_id_demandeur($id_demandeur) {
        $this->id_demandeur = $id_demandeur;
    }

    function set_mail_demandeur($mail_demandeur) {
        $this->mail_demandeur = $mail_demandeur;
    }

    function set_motdepasse_demandeur($motdepasse_demandeur) {
        $this->motdepasse_demandeur = $motdepasse_demandeur;
    }

 	/* Fonctions getter */

    function get_id_demandeur() {
        return $this->id_demandeur;
    }

    function get_mail_demandeur() {
        return $this->mail_demandeur;
    }

    function get_motdepasse_demandeur() {
        return $this->motdepasse_demandeur;
    }




?>