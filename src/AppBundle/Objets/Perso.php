<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Objets;

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
    private $att;
    private $def;
    private $pv;
//    private $pa;
    private $mov;
    private $x;
    private $y;
    
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

    function getAtt() {
        return $this->att;
    }

    function getDef() {
        return $this->def;
    }

    function getPv() {
        return $this->pv;
    }

//    function getPa() {
//        return $this->pa;
//    }

    function getMov() {
        return $this->mov;
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

    function setAtt($att) {
        $this->att = $att;
    }

    function setDef($def) {
        $this->def = $def;
    }

    function setPv($pv) {
        $this->pv = $pv;
    }

//    function setPa($pa) {
//        $this->pa = $pa;
//    }

    function setMov($mov) {
        $this->mov = $mov;
    }

    function setX($x) {
        $this->x = $x;
    }

    function setY($y) {
        $this->y = $y;
    }


    
}
