<?php


class printer
{
    public $type;
    public $color;
    public $price;
    public $functional;
    public $size;

    /**
     * printer constructor.
     * @param $type
     * @param $color
     * @param $price
     * @param $functional
     * @param $size
     */
    public function __construct($type, $color, $price, $functional, $size)
    {
        $this->type = $type;
        $this->color = $color;
        $this->price = $price;
        $this->functional = $functional;
        $this->size = $size;
    }
    public function connected()
    {
        /**
        код подключение к устройству
         */
    }
    public function on()
    {
        /**
        код включения
         */
    }
    public function printdocument()
    {
        /**
        код распечатавания документов
         */
    }
    public function off()
    {
        /**
        код выключения
         */
    }
}