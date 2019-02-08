<?php require_once('connection.php'); ?>
<?php session_start(); ?>

<?php
$error=array();
if(isset($_POST['submit'])){

    

    

    if(empty($error)){
        $categary=mysqli_real_escape_string($connection,$_POST['categary']);
        $charge=mysqli_real_escape_string($connection,$_POST['charge']);
     
        
        $query="INSERT INTO room(categary,charge)VALUES('{$categary}','{$charge}')";
        
     $results=mysqli_query($connection,$query);
     if($results){
        header('Location:backend.php?add_user=true');
    }
    else{
        echo '4444';
    }
}
     

  
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Room Add</title>
    <link rel="stylesheet" href="main.css">
   
    

</head>
<body>
<header>
        <div class="appname">Online Room Booking</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
    <main>
<h1>Manager Add <span><a href="backend.php">Back to page</a></span></h1>
<?php
if(!empty($error)){
    echo '<div class="errmsg">';
    echo '<b>There was error</b>';
    foreach($error as $error){
        echo $error.'<br>';
    }
    echo "</div>";

}
?>

<form action="roomadd.php"method="POST" class="userform">
<p>
    <label for="">Categary</label>
    <input type="text" name="categary" require>
</p>
<p>
    <label for="">Charge</label>
    <input type="number" name="charge" require>
</p>

<p>
    <button type="submit" name="submit">Add Room</button>
</p>

</form>
    </main>
    
</body>
</html>