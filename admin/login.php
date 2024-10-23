<?php
require_once("../config/connect.php");

if(isset($_POST['button'])) {
    $email= $_POST['email'];
    $password = $_POST['password'];

    $searchSQL = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn,$searchSQL);

    if(mysqli_num_rows($result)==1) {

       $data= mysqli_fetch_assoc($result);
       session_start();
       $_SESSION['login_status']=true;
       $_SESSION['name']=$data['name'];

       header("location:index.php");
    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login Page</title>
</head>



<body>
<style>
    #login-page{
        height: 100%;
        width: 100%; 
       
    }

    .login-form{
        height: 80vh;
        width: 100%;
        justify-content: center;
        align-items: center;
        display: flex;
        padding-top: 80px;
        
       
    }
    .login-card{
        height: 440px;
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
    .login-card h3{
        font-size:15px ;
        font-weight: 600;
        
    }
    .login-card h3 a{
        text-decoration: none;
        color: #5b9dd4;
    }

 
</style>

 <section id="login-page ">
    <div class="login-form ">
    <form method="POST">
        <div class="login-card">
            <h2>LOGIN HERE</h2>
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check"> 
  </div>
  <button type="submit" class="btn btn-primary" name="button">Submit</button>
  <h3 class="py-3">Not an user?<a href="register.php">Register here</a></h3>
  </div>
</form>
    </div>
    

 </section>  
 


</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>