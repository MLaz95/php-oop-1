<?php

/**
 * this class defines a single movie
 */
class Movie
{

    public $title;
    public $year;
    public $runtime;
    public $score;
    public $genres = [];
    public $director;

    /**
     * __construct
     *
     * @param  string $_title
     * @param  int $_year
     * @param  string $_runtime
     * @param  int $_score
     */
    function __construct($_title, $_year, $_runtime, $_score)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->runtime = $_runtime;
        $this->score = $_score;
    }

    public function getSubTitle()
    {
        return $this->year . ', ' . $this->runtime . ', Score: ' . $this->score;
    }
}