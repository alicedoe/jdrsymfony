<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace AppBundle\Objets\Races;

/**
 * Description of Elfe
 *
 * @author alice-gabbana
 */
class Elfe {
           private $att;
    private $mov;
    private $def;
    
    public function __construct() {
        $att = 7;
        $mov = 4;
        $def = 0.1;
        $pv = 20;
        echo "je suis un elfe";
    }
}
