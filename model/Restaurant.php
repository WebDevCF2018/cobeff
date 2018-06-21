<?php
/**
 * Created by PhpStorm.
 * User: nicolas.diarra
 * Date: 21-06-18
 * Time: 09:48
 */

class Restaurant
{

    private $idMenu, $thedate ,$description;

    //constructeur
    public function __construct(array $datas)
    {
        $this->hydrate($datas);
    }


    private function hydrate(Array $Datas){
        foreach ($Datas as $key => $value){
            $NameSetter = "set".ucfirst($key);
            if(method_exists($this,$NameSetter)){
                $this->$NameSetter($value);
            }else{
                echo "Le setter: $NameSetter n'existe pas<br>";
            }
        }
    }

    /**
     * getters
     */
    public function getIdMenu()
    {
        return $this->idMenu;
    }

    public function getThedate()
    {
        return $this->thedate;
    }

    public function getDescription()
    {
        return $this->description;
    }

    /**
     * setters
     */
    public function setIdMenu($idMenu)
    {
        $this->idMenu = (int) $idMenu;
    }

    public function setThedate($thedate)
    {
        $this->date = $thedate;
    }

    public function setDescription($description)
    {
        $this->description = html_entity_decode($description);
    }




}