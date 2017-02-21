<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace AppBundle\Objets\Roles;
/**
 * Description of Archer
 *
 * @author alice-gabbana
 */
class Archer {
        private $att;
    private $mov;
    private $def;
    private $pv;
    
    public function __construct() {
        $att = -1;
        $mov = 0;
        $def = -0.1;
        $pv = +1;
    }
}
