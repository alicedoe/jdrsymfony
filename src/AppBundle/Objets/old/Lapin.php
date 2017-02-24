<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace AppBundle\Objets;
use AppBundle\Objets\Perso;
/**
 * Description of Guerrier
 *
 * @author alice-gabbana
 */
class Lapin extends Perso {
    
    private $raMov;
    private $raAtt;
    private $radef;
    
    public function __construct($classe) {
        
        $this->setRaMov(4);
        $this->setRaAtt (1);
        $this->setRadef (0.1);
        $this->setRace("Lapin");
        
        $path = "AppBundle\Objets\\" . $classe;
        $classe = new $path();
        
        $this->setClasse($classe);
        $this->setRace($this);
        
        $this->caracPerso();
        
    }
    
    function getRaMov() {
        return $this->raMov;
    }

    function getRaAtt() {
        return $this->raAtt;
    }

    function getRadef() {
        return $this->radef;
    }

    function setRaMov($raMov) {
        $this->raMov = $raMov;
    }

    function setRaAtt($raAtt) {
        $this->raAtt = $raAtt;
    }

    function setRadef($radef) {
        $this->radef = $radef;
    }


}