<?php session_start();require "../initDB.php";if(isset($_POST['function'])){switch($_POST['function']){case 1:$response=200;if(isset($_POST['username'])){if($_POST['username']!=""){$username=$_POST['username'];}else{$response=2;}}else{$response=2;}if(isset($_POST['password'])){if($_POST['password']!=""){$password=$_POST['password'];}else{$response=2;}}else{$response=2;}if($response==200){$req=$db->query('SELECT username FROM login WHERE username="'.$username.'" and password = "'.$password.'"');$req=$req->fetch();}else{echo $response;die;}if($req['username']!=""){$_SESSION['username']=$req['username'];$response=200;}else{$response=403;}echo $response;default:die;}}else{die;}?>