<?php

class Bicycle
{

    /**
     * @var string
     * bike color
     */
    private $color;

    /**
     * @var integer
     * bike speed
     */
    private $currentSpeed;

    /**
     * @var integer
     * bike number of seats
     */
    private $nbSeats = 1;

    /**
     * @var integer
     * bike number of wheels
     */
    private $nbWheels = 2;


    /**
     * Bicycle constructor.
     * @param string $color
     */
    public function __construct(string $color)
    {
        $this->color = $color;
    }

    /**
     * give a current speed for this bike
     * @return string :  return "Go !"
     */
    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    /**
     * set the current speed to 0
     * @return string : return a message saying "brake" more or less times depending on the current speed
     */
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    /**
     * get the bike color
     * @return string : the bike color
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * set the bike color
     * @param string $colorset : the new bike color
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }

    /**
     * get the bike current speed
     * @return int : the bike current speed
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * the bike current speed
     * @param int $currentSpeedset : the new bike speed
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }

    }

    /**
     * get the bike number of seats
     * @return int : the bike number of seats
     */
    public function getNbSeats() : integer
    {
        return $this->nbSeats;
    }

    /**
     * get the bike number of wheels
     * @return int : return the bike number of wheels
     */
    public function getNbWheels() : integer
    {
        return $this->nbWheels;
    }

}