<?php


class human
{
    public $eye_color;
    public $body_type;
    public $gender;
    public $nationality;
    public $height;
    public $weight;

    /**
     * human constructor.
     * @param $eye_color
     * @param $body_type
     * @param $gender
     * @param $nationality
     * @param $height
     * @param $weight
     */
    public function __construct($eye_color, $body_type, $gender, $nationality, $height, $weight)
    {
        $this->eye_color = $eye_color;
        $this->body_type = $body_type;
        $this->gender = $gender;
        $this->nationality = $nationality;
        $this->height = $height;
        $this->weight = $weight;
    }


    public function arrive()
    {
        /**
         * код рождения
         */
    }

    public function grow_up()
    {
        /**
         * код роста
         */
    }

    public function learn()
    {
        /**
         * код обучения
         */
    }

    public function experience()
    {
        /**
         * код получение опыта
         */
    }

    public function create_a_family()
    {
        /**
         * код оздания семьи
         */
    }

    public function grow_old()
    {
        /**
         * код старения
         */
    }

    public function die()
    {
        /**
         * код смерти
         */
    }
}