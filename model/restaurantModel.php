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


function updateMenu(PDO $db, int $idMenu,$date,$description){
    $date = htmlspecialchars(strip_tags(trim($tabPost['inserTitre'])),ENT_QUOTES);
    $description=htmlspecialchars(strip_tags($tabPost['text']),ENT_QUOTES);
    if(empty($date)||empty($description)) return false;
    $sql = "UPDATE restaurant SET dates ='$date', description ='$description' WHERE idMenu = $idMenu;";
$recup = $db->exec($sql);


}
