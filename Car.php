<?php


Class Car{

    /**
     * @var int : number of wheels
     */
    private $nbWheels=4;
    /**
     * @var int car current speed
     */
    private $currentSpeed=0;
    /**
     * @var string car color
     */
    private $color="blue";
    /**
     * @var int car number of seats
     */
    private $nbSeats=5;
    /**
     * @var string car enegy type
     */
    private $energy="fuel";
    /**
     * @var int car energy level
     */
    private $energyLevel=0;
    /**
     * @var bool car engine status (true for started, false if stopped)
     */
    private $isStarted=false;

    /**
     * Car constructor.
     * @param string $color : car color
     * @param int $nbSeat : car number of seats
     * @param string $energy : car energy
     */
    public function __construct(string $color, int $nbSeat, string $energy )
    {
        $this->color=$color;
        $this->nbSeat=$nbSeat;
        $this->energy=$energy;

    }

    /**
     * set the car speed to 40
     * @return string : "Go !" if the engine is started, a message telling to start is the engine is stopped
     */
    public function forward() : string
    {
        $message="You must call the 'start' method before expectig going forward";

        if ($this->isStarted) {
            $this->currentSpeed = 45;
            $message="Go !";
        }

        return $message;
    }

    /**
     * set the speed to 0
     * @return string : a message saying "brake" more or less times depending on the current speed
     */
    public function brake() : string
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
     * set the engine to the "started" status
     */
    public function start() : void
    {
        $this->isStarted=true;
    }

    /**
     * @return int : the number of wheels
     */
    public function getNbWheels() : int
    {
        return $this->nbWheels;
    }

    /**
     * @return int : the current car speed
     */
    public function getCurrentSpeed() : int
    {
        return $this->currentSpeed;
    }

    /**
     * @return string : the car color
     */
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * @return int : the number of seats in this car
     */
    public function getNbSeats() : int
    {
        return $this->nbSeats;
    }

    /**
     * @return string : the energy type
     */
    public function getEnergy() : string
    {
        return $this->energy;
    }

    /**
     * @return int : the ernegy level
     */
    public function getEnergyLevel() : int
    {
        return $this->energyLevel;
    }


}