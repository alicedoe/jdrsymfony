<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Objets;

/**
 * Description of Race
 *
 * @author alice-gabbana
 */
class Race {

    private $pv;
    
    public function __construct($r) {
        $pv=20;
        $perso = new Races\Elfe();
        print_r($perso);
    }
    
    function getPv() {
        return $this->pv;
    }

    function setPv($pv) {
        $this->pv = $pv;
    }



}
