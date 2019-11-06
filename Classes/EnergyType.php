<?php 

class EnergyType
{
    const FIRE = 'Fire';
    const WATER = 'Water';
    const LIGHTNING = 'Lightning';
    const FIGHTING = 'Fighting';    

    public $name;

    public function __construct($name){
        $this->name = $name;
    }
}