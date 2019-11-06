<?php

class Pikachu extends Pokemon
{
    function __construct($name)
    {
        parent::__construct(
            $name,
            new EnergyType(EnergyType::LIGHTNING),
            60,
            60,
            new Weakness(EnergyType::FIRE, 1.5),
            new Resistance(EnergyType::FIGHTING, 20),
            [new Attack('Electric ring', 50),
             new Attack('Pika punch', 20)]
        );
    }
}