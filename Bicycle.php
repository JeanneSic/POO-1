<?php

class Bicycle
{
    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $currentSpeed;
    /**
     * @var integer
     */
    private $nbSeats;
    /**
     * @var integer
     */
    private $nbWheels;

    //GET/SET
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getcurrentSpeed()
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed=$currentSpeed;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;
    }

    public function getnbWheels()
    {
        return $this->nbWheels;
    }
    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;
    }
//MES FONCTIONS MOUVEMENT
    public function forward()
    {
        $this->currentSpeed=15;
        return"Go!";
    }

    public function brake()
    {
        $sentence = "";
        while ($this->currentSpeed>0){
            $this->currentSpeed--;
            $sentence.="Brake!!!!";
        }
        $sentence.= "I'm stopped !";
        return $sentence;
    }


}


