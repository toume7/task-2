<?php


class microwave
{
    public $color;
    public $capacit;
    public $functional;
    public $size;

    /**
     * microwave constructor.
     * @param $color
     * @param $capacit
     * @param $functional
     * @param $size
     */
    public function __construct($color, $capacit, $functional, $size)
    {
        $this->color = $color;
        $this->capacit = $capacit;
        $this->functional = $functional;
        $this->size = $size;
    }
    public function on()
    {
        /**
        код включения
         */
    }
    public function openDoor()
    {
        /**
        код открытия двери
         */
    }
    public function put_food()
    {
        /**
        код для заклдыки еды
         */
    }
    public function closeDoor()
    {
        /**
        код закрытия двери
         */
    }
    public function timer()
    {
        /**
        код звключения таймера
         */
    }
    public function get_groceries()
    {
        /**
        код доставания еды
         */
    }
    public function off()
    {
        /**
        код выключения
         */
    }
}