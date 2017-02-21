<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Objets;

/**
 * Description of Role
 *
 * @author alice-gabbana
 */
class Role {
    private $att;
    private $def;
    private $pv;
    private $mov;
    
    function getAtt() {
        return $this->att;
    }

    function getDef() {
        return $this->def;
    }

    function getPv() {
        return $this->pv;
    }

    function getMov() {
        return $this->mov;
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

    function setMov($mov) {
        $this->mov = $mov;
    }


}
