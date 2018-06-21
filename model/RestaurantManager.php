<?php
/**
 * Created by PhpStorm.
 * User: nicolas.diarra
 * Date: 21-06-18
 * Time: 09:48
 */

class RestaurantManager
{

    private $db;

    public function __construct(PDO $connexion)
    {
        $this->db=$connexion;
    }


    public function listMenu(){

        $list = $this->db->query("SELECT * FROM restaurant");

        if($list->rowCount()){
            return $list->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }


    public function updateMenu(Restaurant $NewDatas, int $getIdMenu){

        if($NewDatas->getIdMenu()==$getIdMenu){
            $sql="UPDATE restaurant SET thedate=?, description=? WHERE idMenu=?";
            $update = $this->db->prepare($sql);

            $update->execute([
                $NewDatas->getDate(),
                $NewDatas->getDescription()
            ]);
            if($update->rowCount()){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }


}