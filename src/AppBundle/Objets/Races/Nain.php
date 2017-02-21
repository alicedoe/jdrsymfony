<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace AppBundle\Objets\Races;
/**
 * Description of Nain
 *
 * @author alice-gabbana
 */
class Nain {
           private $att;
    private $mov;
    private $def;
    
    public function __construct() {
        $att = 10;
        $mov = 2;
        $def = 0.4;
    }
}
