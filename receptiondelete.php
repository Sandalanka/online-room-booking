<?php session_start(); ?>
<?php require_once('connection.php');?>
 
<?php
if(!isset($_SESSION['user_id'])){
    header('Location:addreception.php');
}
$error=array();
if(isset($_GET['user_id'])){
    $user_id=mysqli_real_escape_string($connection,$_GET['user_id']);

$query="UPDATE reception_details SET is_delete =1 WHERE id ={$user_id} LIMIT 1" ;
$result=mysqli_query($connection,$query);
if($result){
    header('Location:addreception.php');
}
}

else{
    header('Location:addreception.php');
}



?>