<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - kinan sleman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css"/>

</head>
<body>
<nav class="bg-primary navbar text-light">
  <div  class="container-fluid">
    <a class="navbar-brand" href="#">
      <img style="width:40px; border-radius:50%; height:40px; object-fit:cover;" src="img/image5.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
    </a>  <span dir="rtl" style="font-size: 34px;font-family: serif;font-style: italic;">
      kinan sleman
    </span>
  </div>

</nav>
<?php
    $userName = "kinansleman";
    $password = "12345";
    if(isset($_POST['LOGIN'])){
        if($userName === $userName && $_POST['Password'] === $password){
            session_start();
            $_SESSION['userName'] = $userName;
            $_SESSION['password'] = $_POST['Password'];
            $_SESSION['login'] = true;
            echo "<script> location.replace('index.php'); </script>";
            // echo "kinansleman";
        }else{
            echo '<div  class=" pl-5 alert alert-danger" role="alert">
            Incorrect username or password !
          </div>';
        }
    }
?>  
    <div class="m-5">
        <form method="POST">
            <label style="font-size:20px;">UserName : </label><input class="form-control" type="text" name="UserName" required/>
            <br/>
            <label style="font-size:20px;">Password : </label><input class="form-control" type="password" name="Password" required/>
        <br/>
        <button type="submit" name="LOGIN" class="mx-auto d-block btn btn-outline-warning">LOGIN</button>
    </form>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
