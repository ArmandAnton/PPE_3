<?php


class LigneFrais {


    private $id_lf;
    private $couthebergement_lf;
    private $coutpeage_lf;
    private $coutrepas_lf;
    private $datetrajet_lf;
    private $km_lf;


    /* Fonction constructeur */ 
	function __construct($id_lf, $couthebergement_lf, $coutpeage_lf, $coutrepas_lf, $datetrajet_lf, $km_lf) {
        $this->set_id_lf($id_lf) = $id_lf;
        $this->set_couthebergement_lf($couthebergement_lf) = $couthebergement_lf;
        $this->set_coutpeage_lf($coutpeage_lf) = $coutpeage_lf;
        $this->set_coutrepas_lf($coutrepas_lf) = $coutrepas_lf;
        $this->set_datetrajet_lf($datetrajet_lf) = $datetrajet_lf;
        $this->set_km_lf($km_lf) = $km_lf;
        
    }

    /* Fonction setter */ 

    function setId_lf($id_lf) {
        $this->id_lf = $id_lf;
    }

    function setCouthebergement_lf($couthebergement_lf) {
        $this->couthebergement_lf = $couthebergement_lf;
    }

    function setCoutpeage_lf($coutpeage_lf) {
        $this->coutpeage_lf = $coutpeage_lf;
    }

    function setCoutrepas_lf($coutrepas_lf) {
        $this->coutrepas_lf = $coutrepas_lf;
    }

    function setDatetrajet_lf($datetrajet_lf) {
        $this->datetrajet_lf = $datetrajet_lf;
    }

    function setKm_lf($km_lf) {
        $this->km_lf = $km_lf;
    }

    /* Fonction getter */ 

    function getId_lf() {
        return $this->id_lf;
    }

    function getCouthebergement_lf() {
        return $this->couthebergement_lf;
    }

    function getCoutpeage_lf() {
        return $this->coutpeage_lf;
    }

    function getCoutrepas_lf() {
        return $this->coutrepas_lf;
    }

    function getDatetrajet_lf() {
        return $this->datetrajet_lf;
    }

    function getKm_lf() {
        return $this->km_lf;
    }

}