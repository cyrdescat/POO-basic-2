<?php

// Vehicle.php

class Vehicle
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @var integer
     */
    protected $currentSpeed;

    /**
     * @var integer
     */
    protected $nbSeats;

    /**
     * @var integer
     */
    protected $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }


    /**
     * @return string
     */
    public function start() : string
    {
        if ($this->currentSpeed <= 0) {
            $this->currentSpeed = 1;
            return "The car has started <br>";
        } else {
            return "the car is already running <br>";
        }
    }

    /**
     * @param int $speed
     * @return string
     */
    public function forward(int $speed = 25) : string
    {
        if ($this->currentSpeed <= 0) {
            return "You need to start the vehicle ! <br>";
        } else if ($speed > 0) {
            $this->currentSpeed += $speed;
            return "We're faster ! The vehicle is going at $this->currentSpeed" . "km/h ! <br>";
        } else {
            return "Invalid speed <br>";
        }
    }

    /**
     * @param int $brakes
     * @return string
     */
    public function brake(int $brakes = 25) : string
    {
        if ($brakes <= 0) {
            return "Invalid braking value <br>";
        } else if ($brakes >= $this->currentSpeed) {
            $this->currentSpeed = 0;
            return "We stopped ! <br>";
        } else {
            $this->currentSpeed -= $brakes;
            return "We're slower ! The vehicle is going at $this->currentSpeed" . "km/h ! <br>";
        }
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}
