<?php


class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed = self::SLOW;
    private $on = false;
    private $radius = 5;
    private $color = "blue";

    function __construct()
    {
        $this->speed = $this->getSpeed();
        $this->on = $this->isOn();
        $this->radius = $this->getRadius();
        $this->color = $this->getColor();
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
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
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @param bool $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    /**
     * @return bool
     */
    public function isOn()
    {
        return $this->on;
    }

    function toString()
    {
        if ($this->isOn()) {
            return "Speed: " . $this->getSpeed() .
                " Color: " . $this->getColor() .
                " Radius: " . $this->getRadius() .
                "<br>" . "fan is on";
        } else {
            return " Color: " . $this->getColor() .
                " Radius: " . $this->getRadius() .
                "<br>" . "fan is off";
        }
    }

}