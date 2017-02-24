<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace AppBundle\Objets\Races;
use AppBundle\Objets\Race;
/**
 * Description of Nain
 *
 * @author alice-gabbana
 */
class Nain extends Race {
    
    public function __construct() {
        $att = 10;
        $mov = 2;
        $def = 0.4;
    }
}
