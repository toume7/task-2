<?php


class vacuum_cleaner
{
    public $color;
    public $price;
    public $capacit;
    public $functional;
    public $form;

    /**
     * vacuum_cleaner constructor.
     * @param $color
     * @param $price
     * @param $capacit
     * @param $functional
     * @param $form
     */
    public function __construct($color, $price, $capacit, $functional, $form)
    {
        $this->color = $color;
        $this->price = $price;
        $this->capacit = $capacit;
        $this->functional = $functional;
        $this->form = $form;
    }
    public function on()
    {
        /**
        код включения
         */
    }
    public function remove_dust()
    {
        /**
        код уборки
         */
    }
    public function shake_out_the_dust()
    {
        /**
        код вытряхивания пылесборника
         */
    }

    public function off()
    {
        /**
        код выключения
         */
    }

}