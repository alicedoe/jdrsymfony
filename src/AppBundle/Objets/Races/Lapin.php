<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace AppBundle\Objets\Races;
use AppBundle\Objets\Race;
/**
 * Description of Lapin
 *
 * @author alice-gabbana
 */
class Lapin extends Race {
    
    public function __construct() {
        $att = 1;
        $mov = 4;
        $def = 0.1;
    }
}
