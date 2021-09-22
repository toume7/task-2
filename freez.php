<?php


class freez
{
    public $color;
    public $price;
    public $functional;
    public $capacit;

    /**
     * freez constructor.
     * @param $color
     * @param $price
     * @param $functional
     * @param $capacit
     */
    public function __construct($color, $price, $functional, $capacit)
    {
        $this->color = $color;
        $this->price = $price;
        $this->functional = $functional;
        $this->capacit = $capacit;
    }

    public function openDoor()
    {
        /**
         * код открытия двери
         */
    }

    public function on()
    {
        /**
         * код включения
         */
    }

    public function closeDoor()
    {
        /**
         * код закрытия двери
         */
    }

    public function put_food()
    {
        /**
         * код для заклдыки еды
         */
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getFunctional()
    {
        return $this->functional;
    }

    /**
     * @return mixed
     */
    public function getCapacit()
    {
        return $this->capacit;
    }

}