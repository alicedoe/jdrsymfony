<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace AppBundle\Objets\Roles;
use AppBundle\Objets\Role;
/**
 * Description of Magicien
 *
 * @author alice-gabbana
 */
class Magicien  extends Role {

    
    public function __construct() {
        $att = 1;
        $mov = -1;
        $def = 0;
        $pv = +1;
    }
}
