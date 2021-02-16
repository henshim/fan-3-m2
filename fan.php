<?php


class fan
{
const Slow=1;
const Medium=2;
const Fast=3;

private $speed;
private $on;
private $radius;
private $color;

function __construct(){
    $this->speed=self::Slow;
    $this->on=false;
    $this->radius=5;
    $this->color='yellow';
}

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        switch ($speed){
            case (1):
                $this->speed = self::Slow;
                break;
            case (2):
                $this->speed = self::Medium;
                break;
            case (3):
                $this->speed = self::Fast;
                break;
        }
    }

    /**
     * @param false $on
     */
    public function setIsOn($on)
    {
        $this->on = $on;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return false
     */
    public function getIsOn()
    {
        return $this->on;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    public function toString(){
        if ($this->on==true){
            echo 'speed: '.$this->getSpeed().' color: '.$this->getColor().' radius: '.$this->getRadius().' Fan is on<br>';
        }elseif ($this->on==false){
            echo  'color: '.$this->getColor().' radius: '.$this->getRadius().' Fan is off<br>';
        }
    }
}