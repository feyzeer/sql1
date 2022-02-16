<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(isset($_POST["email"]) && isset($_POST["password"])){


      include("connection.php");

      $email = $_POST["email"];
      $password = hash('sha256', $_POST["password"]) ;

       $query = "SELECT *  FROM comptes WHERE email = '$email'  AND  password = '$password' ";
       $user = mysqli_query($connection,$query);

 
       if( mysqli_num_rows($user) != 0 ){
           session_start();
           $rsl = mysqli_fetch_assoc($user);
           $_SESSION['id'] = $rsl['id'];
           $_SESSION['username'] = $rsl['username'];
           $_SESSION['gmail'] = $rsl['email'];
           header('Location: index.php');
       }

    }else{
      $erre = '<div class="alert alert-danger" role="alert">
               A simple danger alert—check it out!
             </div>';
    }

  }




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    

    
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .boot{
         max-width: 450px;
          min-width: 300px;
          height: 500px;
          padding: 30px;
          margin:50px auto;
          background: #FFFFFF;
          box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.1);
          border-radius: 20px;
      }
      body{
          width: 100%;
          height: 100vh;
          background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%);
         }
         h1{
            margin-left: 25px;    
         }
         
      
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body >
    <div class="boot">
  <main class="form-signin">
  <form method="POST">
   
    <h1 class="h3 mb-3 fw-normal border-start border-4 border-info ps-2">E-Classe</h1>
    <h4 class=" text-center">SIGN IN</h4>
    <p class=" text-center fs-6 text-secondary">Enter your credentials to access your account</p>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="Email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email" name="email">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="Password" class="form-control" id="exampleFormControlInput1" placeholder="Enter your password" name="password">
      </div>

      <input class="btn btn-primary mt-5" type="submit" name="submit" value="SIGN IN" />


    <div class="text-center mt-4 text-black-50">
      <span >forgot your password?<a href="#">Reset password</a></span>
    </div>
  
  </form>
</main>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
