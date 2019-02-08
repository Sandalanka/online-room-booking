<?php  require_once('connection.php'); ?>
<?php session_start(); ?>
<?php
if(!isset($_SESSION['user_id'])){
    header('Location:index.php');
}

$userlist='';
$query="SELECT*FROM booking WHERE is_delete=1 ORDER BY name";
$users=mysqli_query($connection,$query);
if($users){
while($user=mysqli_fetch_assoc($users)){
    $userlist.="<tr>";
    $userlist.="<td>{$user['name']} </td>";
    $userlist.="<td>{$user['idcard']} </td>";
    $userlist.="<td>{$user['email']} </td>";
    $userlist.="<td>{$user['categary']} </td>";
    $userlist.="<td>{$user['room']} </td>";

    $userlist.="<td><a href=\"ordernew.php?user_id={$user['id']}\">Delete</a></td>";
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
    <title>Booking Details</title>
    <link rel="stylesheet" href="main.css">
    
 
    
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="ab">
<header >
        <div class="appname">Online Room Booking</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
   
    
      
       
        
    
   
    
     
     
<main>
    <center><h1>Booking Details</h1></center>
    <table class="masterlist">
    <tr>
    <th>Name</th>
    <th>Id Number</th>
    <th>Email</th>
        <th>Categary</th>
        <th>Number Of Room</th>
        <th>Cancel</th>

</tr>
<?php echo $userlist; ?>
</table>
</main>

</body>
</html> 
