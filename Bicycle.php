<?php

//Bicycle.php

class Bicycle 
{
    private string $color;
    private int $currentSpeed;
    private int $nbSeats = 1;
    private int $nbWheels = 2;

    public function __construct(string $color, int $currentSpeed)
    {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
    }
    public function getColor(): string
    {
    return $this->color;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function setColor(string $color): void
    {
        $this->color =$color;
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
    public function forward(): string
    {
        $this->currentSpeed = 20;
        return "Go !";
    }  
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -=2;
       $sentence .= "Brake Hard!!! ";
    }
        $sentence .= "I'm stopped !";
            return $sentence;
    }
}
