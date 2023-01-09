
<php>
    <html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link href="stylelogin.css" rel="stylesheet"> 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
  
<php
 

include "db_connect";
include 'functions.php';
$password = $_POST['p'];
$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
$password = hash('sha512', $password.$random_salt);
$username = $_POST['username'];
$email = $_POST['email'];
$result = mysqli_query($con,"SELECT * FROM members WHERE username='$username'";

if(mysqli_num_rows($result) == 0){
    $insert_stmt = $mysqli-prepare("INSERT INTO members (username, email, password, salt) VALUES (?, ?, ?, ?)")){
   $insert_stmt-bind_param('ssss', $username, $email, $password, $random_salt);
    $insert_stmt-execute();
    header("Location: '..\..\..\?success=1'");

}else{
mysqli_close();
    header("..\..\..\?error12");
    exit;
}
$result_email = mysqli_query($con,"SELECT * FROM members WHERE email='$email'";

if(mysqli_num_rows($result) == 0){
  
$insert_stmt = $mysqli-prepare("INSERT INTO members (username, email, password, salt) VALUES (?, ?, ?, ?)")){
$insert_stmt-bind_param('ssss', $username, $email, $password, $random_salt);
$insert_stmt-execute();
header("Location: '..\..\..\?success=1'");

}else{
mysqli_close();
header("..\..\..\?error12");
exit;
}


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="post" >
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>
</php>
