<?php


class electric_kettle
{
    public $color;
    public $capacit;
    public $functional;
    public $form;
    public $type;

    /**
     * electric_kettle constructor.
     * @param $color
     * @param $capacit
     * @param $functional
     * @param $form
     * @param $type
     */
    public function __construct($color, $capacit, $functional, $form, $type)
    {
        $this->color = $color;
        $this->capacit = $capacit;
        $this->functional = $functional;
        $this->form = $form;
        $this->type = $type;
    }

    public function on()
    {
        /**
         * код включения
         */
    }

    public function open()
    {
        /**
         * код открытия
         */
    }

    public function pour_water()
    {
        /**
         * код залития воды
         */
    }

    public function closed()
    {
        /**
         * код закрытия
         */
    }

    public function boil()
    {
        /**
         * вскипятить
         */
    }

    public function off()
    {
        /**
         * код выключения
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
    public function getCapacit()
    {
        return $this->capacit;
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
    public function getForm()
    {
        return $this->form;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

}