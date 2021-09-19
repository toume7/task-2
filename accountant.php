<?php


class accountant
{
    public $management;

    /**
     * accountant constructor.
     * @param $management
     */
    public function __construct($management)
    {
        $this->management = $management;
    }

    public function receiving()
    {
        /**
         * код получение документов
         */
    }

    public function check()
    {
        /**
         * код проверки документов
         */
    }

    public function registration()
    {
        /**
         * код оформления документов
         */
    }
}