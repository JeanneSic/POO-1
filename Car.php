<?php


class Car
{

    /**
     * @var integer
     */ private $nbWheels;

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


// Accesseurs des propriétés
    /**
     * @return int
     */
    public function getNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }

    /**
     * @return string
     */

    public function getColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getNbSeat($nbSeat)
    {
        $this->nbSeat = $nbSeat;
    }

    /**
     * @return string
     */
    public function getEnergyType($energy)
    {
        $this->energy = $energy;
    }

    /**
     * @return int
     */
    public function getEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }



// Démarrer, avancer, freiner.
    public function start()
    {
        $this->currentSpeed = 0;
        return "La voiture démarre";

    }
    public function forward()
    {
        $this->currentSpeed = 100;
        return "La voiture avance vite !!!";
    }

    public function brake()
    {
        $sentence = "";
        while($this->currentSpeed>0){
            $this->currentSpeed--;
            $sentence .= "BRAKE !!";
        }
        $sentence .= "La voiture est arrêtée.";
        return $sentence;
    }

}