<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Objets;

/**
 * Description of Classes
 *
 * @author alice-gabbana
 */
class Classes extends Races {
    
    public function __construct($classe, $race, $nom, $coord) {
        
        $this->setClasse($classe);
        $this->setRace($race);
        $this->setCoord($coord);
        $this->setNom($nom);
        
        $this->$classe($race);
    }
    
    public function guerrier($race) {
        
        $this->caracPerso(0, 3, 0.1, 2, $race);
        
    }
    
    public function palade($race) {
        
        $this->caracPerso(0, 2, 0.1, 3, $race);
        
    }
    
    public function magicien($race) {
        
        $this->caracPerso(-1, 1, 0, 1, $race);
        
    }
    
    public function cretin($race) {
        
        //att, def, mov, pv        
        $this->caracPerso(0, -2, 0, -2, $race);
        
    }
    
    public function archer($race) {
        
        $this->caracPerso(-1, 0, -0.1, 1, $race);
        
    }
    
    public function caracPerso ($mov, $att, $def, $pv, $race) {
        
        $race = new Races($race);
        
        $movClasse = $mov + $race->getMovRace();
        $this->setMov($movClasse);
        
        $attClasse = $att + $race->getAttRace();
        $this->setAtt($attClasse);
        
        $defClasse = $def + $race->getDefRace();
        $this->setDef($defClasse);
        
        $pvClasse = $pv + $race->getPvRace();
        $this->setPv($pvClasse);
        
    }
}
