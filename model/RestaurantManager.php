<?php
/**
 * Created by PhpStorm.
 * User: nicolas.diarra
 * Date: 14-06-18
 * Time: 15:47
 */

class RestaurantManager
{

    private $connexion;

    public function __construct(ConnectCobeff $dbb)
    {

        $this->connexion= $dbb->getConnect();

    }

}