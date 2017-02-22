<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace AppBundle\Objets\Races;
use AppBundle\Objets\Race;
/**
 * Description of Orc
 *
 * @author alice-gabbana
 */
class Orc extends Race {

    
    public function __construct() {
        $att = 9;
        $mov = 3;
        $def = 0.2;
    }
}
