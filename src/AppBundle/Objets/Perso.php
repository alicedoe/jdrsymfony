<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Objets;
use AppBundle\Objets\Races\Elfe;
use AppBundle\Objets\Roles\Archer;

/**
 * Description of Perso
 *
 * @author alice-gabbana
 */
class Perso {
    
    private $nom;
    private $race;
    private $classe;
    private $email;
    private $x;
    private $y;
    
    function __construct() {

        $this->race = new Elfe();
        $this->classe = new Archer();
        
    }
    function getNom() {
        return $this->nom;
    }

    function getRace() {
        return $this->race;
    }

    function getClasse() {
        return $this->classe;
    }

    function getEmail() {
        return $this->email;
    }

    function getX() {
        return $this->x;
    }

    function getY() {
        return $this->y;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setRace($race) {
        $this->race = $race;
    }

    function setClasse($classe) {
        $this->classe = $classe;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setX($x) {
        $this->x = $x;
    }

    function setY($y) {
        $this->y = $y;
    }


    
}
