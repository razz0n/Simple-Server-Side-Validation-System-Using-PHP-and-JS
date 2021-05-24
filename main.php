<?php

$pass_error=" ";
$sympass_error="";
$user_error="";    
$username="";
$password ="";

if(isset($_POST['login_submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  
  $userlength = strlen($username);
  $passlength = strlen($password);

 
  if($userlength>=5 && $passlength >= 10 && preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!_@#$%]{10,}$/', $password)){
    header('Location:validated.php');
  }else{

  if($username == "" && $password == "") {
    $user_error = "Input Username";
    $pass_error = "Input Password";
  }else{
  

  if($userlength<5 && $password == ""){
    $user_error = "Username must have at least 5 characters";
    $pass_error = "Input password"; 
  }

  if($userlength >= 5 && $password == ""){
    $pass_error = "Input password"; 
  }

  if($userlength>=5 && $passlength!= "" && $passlength<10){
    $pass_error = "Password must be 10 characters long";
  }
  
  if($passlength>=10 && !preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!_@#$%]{10,}$/', $password)) {
    $sympass_error = "Password must have at least one uppercase, one lowercase and one special character";
  }
  } 
  }
}else{
  $username="";
  $password="";
}

?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validation Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section id="topsection">
        <div class="logo"> 
            <a href="index.php"><img src="logo.png" alt="logo"></a>
        </div>
        <div class="webname">
            <h2>WEB BLOGGING SYSTEM</h2>
        </div>
</section>
<section id="sidebar"></section>
<section>
  <form method="POST" action="main.php">
    <h2>LOGIN</h2>
    <div class="row">
      <label>Username</label>
      <input type="text" name="username" id="username" value="<?php echo $username; ?>" autocomplete="off">
      <?php if(isset($user_error)): ?>
      <p><?php echo $user_error; ?></p>
      <?php endif; ?>
    </div>    
    <div class="row">
       <label>Password</label>
       <input type="password" name="password" id="password" value="<?php echo $password; ?>" autocomplete="off"> 
       <?php if(isset($pass_error)): ?>
       <p><?php echo $pass_error; ?></p>
       <?php endif; ?>
       <?php if(isset($sympass_error)): ?>
       <p><?php echo $sympass_error; ?></p>
       <?php endif; ?>
    </div>
    <div class="row">
       <input type="submit" name="login_submit" id="submit">
    </div>
  </form>
</section>
    
<section id="footer">
  <h4> This is copyright from Rajan Lamichhane.</h4>
  <h4> All rights reserved.</h4>
  <h3> 2019 </h3>
</section>
<script src="validated.js"></script>
 
</body>
</html>