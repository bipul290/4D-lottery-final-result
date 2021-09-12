<?php
session_start();
if(isset($_SESSION['login'])){
	echo '<script type="text/javascript">window.location.href="index.php"</script>';
}
  
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login page</title>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="style.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
  <!--Image start-->
      <img src="img/1.png">
   <!--Image end-->
</div>
<div class="col-md-12">
<form  method="POST" style="    width: 500px;margin: 0 auto;">
<div class="row"></div>



  <div class="col-md-12">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" class="form-control" name="user" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your User Name">
  </div>


  <div class="col-md-12">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Enter Your User Password">
  </div>


  <button style="margin-bottom:40px; " type="submit" name="submit" class="btn btn-primary col-md-12 mt-3">Submit</button>

  </div>
  
</form>
     </div>

     <?php
	 if(isset($_POST["submit"])){
      $name = "megnum";
      $pass = 1234;

      $user = $_POST['user'];
      $password = $_POST['pass'];
      
      if($name == $user && $pass == $password){
        $_SESSION['login'] = $user;
        header("location: index.php");
      }
	 }
     ?>
	 <div class="col-md-12 text-lg-center text-md-center text-sm-center text-xs-center" style="width: 500px;margin: 0 auto;">
        <a style="margin-left: 15px; "href="http://localhost/link/contact.php"  class="buy">Buy Password From Agent</a>   
            <div class="col-lg-12">
                <p>Provided by <a href="http://www.thailandlottery.com" target="_blank">Government Lottery Office</a> For Help People</p>
            </div>
			
			</div>
        </div>
</div>

</body>
</html>