<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title></title>
  </head>
  <style media="screen">
    body{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background: rgba(21, 3, 255,0.86);
    }
    .box{
      width: 300px;
      padding: 40px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      background: rgb(0, 0, 0);
      text-align: center;
    }
    .box h1{
      color: white;
      text-transform: uppercase;
      font-weight: 500;

    }
    .box input[type="text"],.box input[type="password"]{
      border: 0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid #3498db;
      padding: 14px 10px;
      width: 200px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
    }

    .box input[type="submit"]{
      border: 0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid #0aff16;
      padding: 14px 40px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
    }
    .box input[type="submit"]:hover{
      background: #08ff1b;
    }
  </style>
  <body>
    <?php
      session_start();

      include_once('connect.php');
      if (isset($_POST['submit'])) {
        $username=$_POST['username'];
        $password=$mysqli->real_escape_string($_POST['password']);
        $sql ="SELECT * FROM `login` WHERE `username` = '$username' AND `password` = '$password' ";
        $result=$mysqli->query($sql);
        if ($result->num_rows > 0) {
          $row =$result->fetch_assoc();
          $_SESSION['id']=$row['id'];
          $_SESSION['name']=$row['name'];
          header('location:index.php');
        }else{
          echo "string";
        }
      }
    ?>
    <form class="box" action="" method="post">
      <h1>Login</h1>
      <input type="text" name="username" value="" placeholder="Username">
      <input type="password" name="password" value="" placeholder="password">
      <input type="submit" name="submit" value="Login">
    </form>
  </body>
</html>
