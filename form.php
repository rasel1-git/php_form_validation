<?php
$fname = $lname = $email = $password = "";
$errfname = $errlname = $erremail = $errpassword = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['fname'])){
       echo $errfname ="<h1>First Name is required</h1>";
    }else{
        $fname = $_POST['fname'];
        
    }
     if(empty($_POST['lname'])){
       echo $errlname ="<h1> LastName is required</h1>";
    }else{
        $lname = $_POST['lname'];
        
    }
    if(empty($_POST['email'])){
       $email="<h1> Email is required</h1>";
    }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $erremail = "<h3>invalid mail</h3>";
    }else{
        $email = $_POST['email'];
        
    }
    if(empty($_POST['password'])){
       echo $errpassword ="<h1> Password is required</h1>";
    }else{
        $password = $_POST['password'];
        
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <form action="#" method="POST">
       <input type="text" name="fname" placeholder="First Name">
       <input type="text" name="lname" placeholder="Last Name">
       <input type="text" name="email" placeholder="Your Email">
       <?php echo $erremail; ?>
       <input type="password" name="password" placeholder="Your password">
       <input type="submit" value="submit" name="submit">
   </form>
    
</body>
</html>


<?php
echo $fname ."<br>";
echo $lname ."<br>";
echo $email ."<br>";
echo $password ."<br>";
?>