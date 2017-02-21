<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Objets;

/**
 * Description of Case
 *
 * @author alice-gabbana
 */
class Td {

    private $x;
    private $y;
    private $type;
    
    function getId() {
        return $this->id;
    }

    function getType() {
        return $this->type;
    }

    function getX() {
        return $this->x;
    }

    function getY() {
        return $this->y;
    }

    function setX($x) {
        $this->x = $x;
    }

    function setY($y) {
        $this->y = $y;
    }




}
