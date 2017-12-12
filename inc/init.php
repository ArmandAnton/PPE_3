<?php
$root = dirname(__FILE__);
/* Classes metiers */
include_once("$root\class\Adherent.php");
include_once("$root\class\Avancer.php");
include_once('class/Bordereau.php');
include_once('class/Club.php');
include_once('class/Demandeur.php');
include_once('class/Indemnite.php');
include_once('class/LigneFrais.php');
include_once('class/LigueAffiliation.php');
include_once('class/Motif.php');
include_once('class/Representant.php');

/* Classes DAO */
include_once('dao/class.DAO_Adherent.php');
include_once('dao/class.DAO_Avancer.php');
include_once('dao/class.DAO_Bordereau.php');
include_once('dao/class.DAO_Club.php');
include_once('dao/class.DAO_Demandeur.php');
include_once('dao/class.DAO_Indemnite.php');
include_once('dao/class.DAO_LigneDeFrais.php');
include_once('dao/class.DAO_LigueAffiliation.php');
include_once('dao/class.DAO_Motif.php');
include_once('dao/class.DAO_Representant.php');

/* Connexion bdd */
include_once('dao/dao.php');
include_once('hashage.php');




?>