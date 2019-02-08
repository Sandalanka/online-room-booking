<?php require_once('connection.php'); ?>
<?php session_start();?>

<?php
$userlist='';
$query="SELECT*FROM room WHERE is_delete=0 ORDER BY categary";
$users=mysqli_query($connection,$query);
if($users){
while($user=mysqli_fetch_assoc($users)){
    $userlist.="<tr>";
    $userlist.="<td>{$user['categary']} </td>";
   

    $userlist.="<td>{$user['charge']} </td>";
   
    
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
    <title>Index</title>
    <link rel="stylesheet" href="main.css" >
</head>
<body>
<header>
        <div class="appname">Welcome</div>
        <div class="loggin"><a href="admin.php">admin   </a><a href="managerlogin.php">  manager</a><a href="rlogin.php">  Reception</a></div>
    </header>
    <main>
    <center><h1>Room Details<span><a href="order.php">Order room</a></span></h1></center>
    <table class="masterlist">
    <tr>
        <th>categary</th>
       <th>charge</th>
      
       
      
       

    </tr>
    <?php echo $userlist; ?>
</table>
</main>
    
</body>
</html>