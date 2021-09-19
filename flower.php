<?php


class flower
{
    public $color;
    public $scent;
    public $size;

    /**
     * flower constructor.
     * @param $color
     * @param $scent
     * @param $size
     */
    public function __construct($color, $scent, $size)
    {
        $this->color = $color;
        $this->scent = $scent;
        $this->size = $size;
    }

    public function plant_a_prout()
    {
        /**
         * код посадки растения
         */
    }

    public function water()
    {
        /**
         * поливка растения
         */
    }

    public function grow_up()
    {
        /**
         * рост
         */
    }

    public function bloom()
    {
        /**
         * распуститься
         */
    }

    public function doom()
    {
        /**
         * гибель
         */
    }
}