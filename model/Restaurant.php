<?php
/**
 * Created by PhpStorm.
 * User: nicolas.diarra
 * Date: 13-06-18
 * Time: 15:06
 */

class Restaurant
{

    private $ladate,$descri;


    public function __construct()
    {

    }

    /**
     * Getters
     */
    public function getLadate()
    {
        return $this->ladate;
    }

    public function getDescri()
    {
        return $this->descri;
    }



    /**
     * Setters
     */
    public function setLadate($ladate)
    {
        $this->ladate = $ladate;
    }

    public function setDescri($descri)
    {
        $this->descri = $descri;
    }



}