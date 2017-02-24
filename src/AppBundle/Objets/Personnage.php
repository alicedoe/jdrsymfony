<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Objets;

/**
 * Description of Personnage
 *
 * @author alice-gabbana
 */
class Personnage {
    private $nom;
    private $email;
    private $pv;
    private $att;
    private $def;
    private $mov;
    private $race;
    private $classe;
    private $coord;
    
    function getCoord() {
        return $this->coord;
    }

    function setCoord($coord) {
        $this->coord = $coord;
    }

    function getPv() {
        return $this->pv;
    }

    function setPv($pv) {
        $this->pv = $pv;
    }

    
    function getNom() {
        return $this->nom;
    }

    function getEmail() {
        return $this->email;
    }

    function getAtt() {
        return $this->att;
    }

    function getDef() {
        return $this->def;
    }

    function getMov() {
        return $this->mov;
    }

    function getRace() {
        return $this->race;
    }

    function getClasse() {
        return $this->classe;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setAtt($att) {
        $this->att = $att;
    }

    function setDef($def) {
        $this->def = $def;
    }

    function setMov($mov) {
        $this->mov = $mov;
    }

    function setRace($race) {
        $this->race = $race;
    }

    function setClasse($classe) {
        $this->classe = $classe;
    }


}
