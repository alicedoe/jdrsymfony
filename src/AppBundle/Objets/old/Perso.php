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
     
    private $race;
    private $classe;
    private $email;
    private $nom;
    private $x;
    private $y;
    private $mov;
    private $att;
    private $def;
    private $pv;
    
    public function caracPerso() {
            
            $this->setAtt($this->classe->getAtt() + $this->race->getRaAtt());
            $this->setDef($this->classe->getDef() + $this->race->getRaDef());
            $this->setMov($this->classe->getMov() + $this->race->getRaMov());
            $this->setPv($this->classe->getPv() + 20);
            
            echo $this->getAtt();
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

    function getNom() {
        return $this->nom;
    }

    function getX() {
        return $this->x;
    }

    function getY() {
        return $this->y;
    }

    function getMov() {
        return $this->mov;
    }

    function getAtt() {
        return $this->att;
    }

    function getDef() {
        return $this->def;
    }

    function getPv() {
        return $this->pv;
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

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setX($x) {
        $this->x = $x;
    }

    function setY($y) {
        $this->y = $y;
    }

    function setMov($mov) {
        $this->mov = $mov;
    }

    function setAtt($att) {
        $this->att = $att;
    }

    function setDef($def) {
        $this->def = $def;
    }

    function setPv($pv) {
        $this->pv = $pv;
    }

}
