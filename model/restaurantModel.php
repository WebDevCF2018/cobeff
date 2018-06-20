<?php

function afficheMenu(PDO $db){
    $sql = "SELECT * FROM restaurant";
    $resultat=$db->query($sql);
    if ($resultat->rowCount()) {
        return $resultat->fetchAll(PDO::FETCH_ASSOC);
    }else{
        return false;
    }
}