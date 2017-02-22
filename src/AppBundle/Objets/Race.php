<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Objets;

/**
 * Description of Races
 *
 * @author alice-gabbana
 */
class Race {
    private $att;
    private $def;
    private $mov;
    private $pv;
    
    function getAtt() {
        return $this->att;
    }

    function getDef() {
        return $this->def;
    }

    function getMov() {
        return $this->mov;
    }

    function getPv() {
        return $this->pv;
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

    function setPv($pv) {
        $this->pv = $pv;
    }


    
}
