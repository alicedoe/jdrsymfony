<?php

namespace AppBundle\Objets;

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
