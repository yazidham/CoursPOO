<?php

class Car 
{
    private int $nbWeells;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->nbWeells = 4;
        $this->currentSpeed = 0;
        $this->energyLevel = 100;
    }
    
    public function forward()
    {
        $this->currentSpeed++;
        $this->energyLevel--;
    }
    
    public function brake()
    {
        while ($this->currentSpeed > 0){
            $this->currentSpeed--;
            $this->energyLevel--;
        }
    }
    
    public function start()
    {
        if ($this->currentSpeed > 0){
            echo "la voiture est déja entrain de rouler";
        }else{
            $this->currentSpeed = 15;
            $this->energyLevel--;
        }
    }
    
    public function getNbWeells(): int
    {
        return $this->nbWeells;
    }
    
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    
    public function getColor(): string
    {
        return $this->color;
    }
    
    public function getNbSeats() : int
    {
        return $this->nbSeats;
    }
    
    public function getEnergy(): string
    {
        return $this->energy;
    }
    
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}