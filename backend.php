<?php  require_once('connection.php'); ?>
<?php session_start(); ?>
<?php
if(!isset($_SESSION['user_id'])){
    header('Location:index.php');
}

$userlist='';
$query="SELECT*FROM room WHERE is_delete=0 ORDER BY categary";
$users=mysqli_query($connection,$query);
if($users){
while($user=mysqli_fetch_assoc($users)){
    $userlist.="<tr>";
    $userlist.="<td>{$user['categary']} </td>";
    $userlist.="<td>{$user['charge']} </td>";
 
 

    $userlist.="<td><a href=\"roomdelete.php?user_id={$user['id']}\">Delete</a></td>";
    $userlist.="</tr>";
}
}
else{
    echo 'Database Error';
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backend</title>
    <link rel="stylesheet" href="main.css">
    
 
    
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="ab">
<header >
        <div class="appname">Online Room Booking</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
   
    
        <div class="book"><a href="mangerdetails.php">Manager Information       </a></div>
        <div class="passanger"><a href="addreception.php">Reception Information</a></div>
        <div class="booking"><center><a href="book.php">   Booking Information</a><center></div>
       
        
    
   
    
     
     
<main>
    <center><h1>Room Details<span><a href="roomadd.php">+Add New Room</a></span></h1></center>
    <table class="masterlist">
    <tr>
        <th>Categary</th>
        <th>Charge</th>
        <th>Delete</th>

</tr>
<?php echo $userlist; ?>
</table>
</main>

</body>
</html> 
      
   