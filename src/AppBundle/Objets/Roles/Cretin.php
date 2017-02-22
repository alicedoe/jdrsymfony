<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace AppBundle\Objets\Roles;
use AppBundle\Objets\Role;
/**
 * Description of Cretin
 *
 * @author alice-gabbana
 */
class Cretin  extends Role {
    
    public function __construct() {
        $att = -2;
        $mov = 0;
        $def = 0;
        $pv = -2;
    }
}
