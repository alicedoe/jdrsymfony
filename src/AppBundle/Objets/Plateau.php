<?php

namespace AppBundle\Objets;
use AppBundle\Objets\Td;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of plateau
 *
 * @author alice-gabbana
 */
class Plateau {
    private $x;
    private $y;
    private $type;
    private $td;
    
    public function __construct($x,$y) {
        
        $this->setX($x);
        $this->setY($y);

        $td = new Td();
        $tabtd = array();
        
        for ($i=1; $i<=$x+1; $i++) {
            for ($j=1; $j<=$y+1; $j++) {
                $td->setX($j);
                $td->setY($i);
                $tabtd[]=$td;
            }
        } 
    }
    
    function getX() {
        return $this->x;
    }

    function getY() {
        return $this->y;
    }

    function getType() {
        return $this->type;
    }

    function setX($x) {
        $this->x = $x;
    }

    function setY($y) {
        $this->y = $y;
    }

    function setType($type) {
        $this->type = $type;
    }


    
}
