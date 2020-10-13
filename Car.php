<?php


class Car
{

    /**
     * @var integer
     */ private $nbWheels=4;

    /**
     * @var integer
     */ private $currentSpeed;

    /**
     * @var string
     */ private $color;

    /**
     * @var integer
     */ private $nbSeat;
    /**
     * @var string
     */ private $energy;

    /**
     * @var integer
     */ private $energyLevel;

//--construct

    public function __construct(string $color, int $nbSeat, string $energy)
    {
        $this->color = $color;
        $this->nbSeat = $nbSeat;
        $this->energy = $energy;
    }
// Accesseurs des propriétés
    /**
     * @return int
     */
    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }

    /**
     * @return string
     */

    public function getColor()
    {
        return $this->color;
    }
    public function setColo($color)
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getNbSeat()
    {
        return $this->nbSeat;
    }
    public function setNbSeat($nbSeat)
    {
        $this->nbSeat = $nbSeat;
    }

    /**
     * @return string
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy($energy)
    {
        return $this->energy = $energy;
    }
    /**
     * @return int
     */
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }


// Démarrer, avancer, freiner.
    public function start()
    {
        $sentence = "";
        if($this->energyLevel>0) {
            $this->energyLevel--;
            $this->currentSpeed = 0;
            $sentence .= "La voiture démarre";
        } else {
            $sentence.= "Plus d'énergie ...";
        }
        return $sentence;
    }
    public function forward()
    {
        $sentence = "";
        if ($this->energyLevel > 0){
            $this->energyLevel--;
            $this->currentSpeed = 100;
            $sentence.="La voiture avance vite !!!";
        } else {
            $sentence.="Plus d'énergie ...";
            $this->currentSpeed=0;
        }
        return $sentence;
    }

    public function brake()
    {
        $sentence = "";
        while($this->currentSpeed>0){
            $this->currentSpeed -= 10;
            $sentence .= "BRAKE !!";
        }
        $sentence .= "La voiture est arrêtée.";
        return $sentence;
    }
}