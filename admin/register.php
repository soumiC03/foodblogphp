<?php
require_once("../config/connect.php");


$errorMsg= [];


$name= "";
$email= "";
$password= "";

    if(empty($_POST['name'])) {
        $errorMsg ['name'] = "***Required Field*** Please enter your name" ;
    } else {
        $name= $_POST['name'];
    }
    if(empty($_POST['email'])) {
        $errorMsg ['email'] = "***Required Field*** Please enter your email" ;

    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
       $errorMsg ['email'] = "Invalid email";
    }
     else{
        $email= $_POST['email'];
    }
    if(empty($_POST['password'])) {
        $errorMsg ['password'] = "***Required Field*** Please enter your password";
    } else {
        $password= $_POST['password'];
    }



    if (count($errorMsg) <= 0) {
        $signupsql= "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    
        $signupresult= mysqli_query($conn,$signupsql);
    
        if($signupresult) {
            
            echo"<script> alert('Successfully registered'); window.location.href= 'login.php' </script>";
        } else {
            $errorMsg ['failed'] = "Failed to register";
        }
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register Page</title>
</head>
<body>
<style>
    #login-page{
        height: 100%;
        width: 100%; 
       
    }

    .login-form{
        height: auto;
        width: 100%;
        justify-content: center;
        align-items: center;
        display: flex;
        padding-top: 80px;
        
       
    }
    .login-card{
        height: auto;
        width: 100%;
        border: 1px solid #f56995;
        border-radius: 25px;
        padding: 40px 10px;
        background-color: pink;
      
    }
    .login-card h2{
        text-align: center;
        padding: 20px 0px;
        font-size: 20px;
        color: #5b9dd4;
        font-weight: 600;
    }
</style>

 <section id="login-page ">
    <div class="login-form ">
    <form method="POST">
        <div class="login-card">
            <h2>SIGN UP</h2>
            <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Enter your name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
    
  </div>
  <?php if(!empty($errorMsg['name'])): ?>
    <span class="text-danger"><?=$errorMsg['name'] ?></span>
    <?php endif; ?>
    
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <?php if(!empty($errorMsg['email'])): ?>
    <span class="text-danger"><?=$errorMsg['email'] ?></span>
    <?php endif; ?>
  

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <?php if(!empty($errorMsg['password'])): ?>
    <span class="text-danger"><?=$errorMsg['password'] ?></span>
    <?php endif; ?>
  <div class="mb-3 form-check"> 
  </div>
  <button type="submit" class="btn btn-primary" name="register-button">Register</button>
  </div>
</form>
    </div>

 </section>  
 


</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>