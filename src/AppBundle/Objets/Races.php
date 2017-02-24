<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Objets;

/**
 * Description of Races
 *
 * @author alice-gabbana
 */
class Races extends Personnage {
    
    private $attRace;
    private $movRace;
    private $defRace;
    private $pvRace;
    
    public function __construct($race) {        
        $this->$race();
    }
    
    public function humain() {
        $this->caracRacesPerso(3,8,0.3,20);
        
    }
    
    public function nain() {
        $this->caracRacesPerso(3,8,0.3,20);
        
    }
    
    public function elfe() {
        $this->caracRacesPerso(3,8,0.3,20);
        
    }
        
    public function lapin() {
       $this->caracRacesPerso(3,8,0.3,20);
        
    }  
    
    
    public function orc() {
        $this->caracRacesPerso(3,8,0.3,20);
        
    }
    
    public function caracRacesPerso ($mov, $att, $def, $pv) {     
        
        $this->movRace = $mov;
        $this->attRace = $att;
        $this->defRace = $def;
        $this->pvRace = $pv;
    }
    
    function getAttRace() {
        return $this->attRace;
    }

    function setAttRace($attRace) {
        $this->attRace = $attRace;
    }

    function getMovRace() {
        return $this->movRace;
    }

    function getDefRace() {
        return $this->defRace;
    }

    function getPvRace() {
        return $this->pvRace;
    }

    function setMovRace($movRace) {
        $this->movRace = $movRace;
    }

    function setDefRace($defRace) {
        $this->defRace = $defRace;
    }

    function setPvRace($pvRace) {
        $this->pvRace = $pvRace;
    }


    
}
