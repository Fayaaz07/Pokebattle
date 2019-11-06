<?php 

class Pokemon 
{
    private $name;
    private $type;
    private $health;
    private $hitpoints;
    public $weakness;
    private $resistance;
    public $attacks;

    public function __construct($name, $type, $health, $hitpoints, $weakness, $resistance, $attacks)
    {
        $this->name = $name;
        $this->type = $type;
        $this->health = $health;
        $this->hitpoints = $hitpoints;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->attacks = $attacks;
    }

    public function doAttack($target, $attack) 
    {
        $response = "";
        $response .= $this->name . " use " . $attack->name . "<br>";
        $damage = $attack->damage; 
        if ($this->type->name == $target->weakness) {
            $damage = $attack->damage * $target->weakness->multiplier;
            $response .= "It's very effective! <br>";
        } elseif ($target->resistance->type == $this->type->name) {
            $damage = $attack->damage / $target->resistance->value;
            $response .= "It's not very effective! <br>";    
        } else {
            $damage = $attack->damage;
            $response .= "Normal hit <br>";
        }   

        $target->health = $target->health - $damage; 
        $response .= $target->name . "'s HP after attack " . $target->health . "<br><br>";
        return $response;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type->name;
    }

    public function getHealth()
    {
        return $this->health;
    }
}

