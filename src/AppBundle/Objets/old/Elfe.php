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
class Elfe extends Perso {
    
    private $classe;
    
    public function __construct($classe) {
        
        $path = "AppBundle\Objets\\" . $classe;
        
        $this->classe = new $path();
        $this->setRace("Elfe");
        echo "Je suis un elfe";
    }
}
