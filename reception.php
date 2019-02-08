<?php require_once('connection.php'); ?>
<?php session_start(); ?>

<?php
$error=array();
if(isset($_POST['submit'])){

    

    

    if(empty($error)){
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $id=mysqli_real_escape_string($connection,$_POST['idnumber']);
        $email=mysqli_real_escape_string($connection,$_POST['email']);
        $password=mysqli_real_escape_string($connection,$_POST['password']);
        
        $query="INSERT INTO reception_details(name,idcard,email,password)VALUES('{$name}','{$id}','{$email}','{$password}')";
        
     $results=mysqli_query($connection,$query);
     if($results){
        header('Location:addreception.php?add_user=true');
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
    <title>Reception Add</title>
    <link rel="stylesheet" href="main.css">
   
    

</head>
<body>
<header>
        <div class="appname">Online Room Booking</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
    <main>
<h1>Manager Add <span><a href="mangerdetails.php">Back to page</a></span></h1>
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

<form action="reception.php"method="POST" class="userform">
<p>
    <label for="">Name</label>
    <input type="text" name="name" require>
</p>
<p>
    <label for="">Email</label>
    <input type="email" name="email" require>
</p>
<p>
    <label for="">ID Number</label>
    <input type="text" name="idnumber" require>
</p>
<p>
    <label for="">Password</label>
    <input type="password" name="password" id="" require>
</p>

</p>
<p>
    <button type="submit" name="submit">Add</button>
</p>

</form>
    </main>
    
</body>
</html>