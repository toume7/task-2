<?php


class astronaut
{
    public $age;
    public $body_type;
    public $gender;
    public $nationality;

    /**
     * astronaut constructor.
     * @param $age
     * @param $body_type
     * @param $gender
     * @param $nationality
     */
    public function __construct($age, $body_type, $gender, $nationality)
    {
        $this->age = $age;
        $this->body_type = $body_type;
        $this->gender = $gender;
        $this->nationality = $nationality;
    }

    public function get_a_specialty()
    {
        /**
         * код получение специальности
         */
    }

    public function get_a_job()
    {
        /**
         * код получение работы
         */
    }

    public function prepare()
    {
        /**
         * код для подготовки к полету
         */
    }

    public function flight()
    {
        /**
         * код для полета
         */
    }

    public function return()
    {
        /**
         * код для возвращения
         */
    }

}