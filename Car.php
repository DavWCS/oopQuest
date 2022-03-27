<?php

//Car.php

class Car
{
    private int $nbWheels = 4;
    private int $currentSpeed = 0;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel = 100;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function getColor(): string
    {
    return $this->color;
    }    
    public function getNbSeats(): int
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
    public function setColor(string $color): void
    {
        $this->color =$color;
    }
    public function setEnergy(string $energy): void
    {
        $this->energy =$energy;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
            }
    }
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }
    public function setNbWheels(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function forward($currentSpeed): string
    {
        $this->currentSpeed = $currentSpeed;
        return "Go !";
    }  
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 130) {
            $this->currentSpeed -=15;
       $sentence .= "Brake Hard!!! ";
    }
        $sentence .= "I'm under speed limit just before get caught!";
            return $sentence;
    }
    public function runCar(): string
    {
        $sentence = "Ready for a ride ?";
            return $sentence;
    }
}
