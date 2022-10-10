<?php

require_once 'vehicle.php';

class Truck extends Vehicle
{
    
    private $storageCapacity;
    private $storage = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent:: __construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }else{
            echo "energy not allowed";
        }
    }
    public function getStorage()
    {
        if ($this->storage < $this->storageCapacity){
            return $this->storage ."/" . $this->storageCapacity . " in filing";
        }else{
            return $this->storage ."/" . $this->storageCapacity . " full";
        }
    }
    public function setStorage($storage)
    {
        if ($storage > $this->storageCapacity){
            return "not enough space";
        }else{
            $this->storage = $storage;
        }
    }
    public function getStorageCapacity()
    {
        $this->storageCapacity;
    }
    public function setStorageCapacity($storageCapacity){
        $this->storageCapacity = $storageCapacity;
    }
}