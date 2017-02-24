<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Objets;

/**
 * Description of Cretin
 *
 * @author alice-gabbana
 */
class Cretin {

    private $mov;
    private $att;
    private $def;
    private $pv;

    public function __construct() {

        $this->mov = 0;
        $this->att = -2;
        $this->def = 0;
        $this->pv = -2;
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
