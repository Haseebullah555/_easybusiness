
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Booster Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Bellefair&amp;subset=hebrew,latin-ext" rel="stylesheet">
<!-- //online-fonts -->

<?php 
require_once '../../models/loginmodel.php';
 $login = new loginmodel();
 
 if(isset($_POST['loginuser'])){
     $login->email=  htmlspecialchars($_POST['email']);
     $login->password=  htmlspecialchars($_POST['password']);
     $login->checklogin();
 }


?>
    <div class="main-content-agile">
	<div class="sub-main-w3">	
		<div class="wthree-pro">
			<img src="images/profile.jpg" alt="image">
                        <br>
			<h2>Login Now</h2>
                        <br>
		</div>
		<form action="" method="post">
          
			<input placeholder="Username or E-mail" name="email" class="user" type="text" required="">
                        <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br><br>
			<input  placeholder="Password" name="password" class="pass" type="password" required="">
                        <span class="icon2"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span><br><br>
			<div class="sub-w3l">
			<div class="left-w3l">
				<span><input type="checkbox" />Remember Me</span>
				</div>
				<div class="right-w3l">
					<input type="submit" value="Login" name="loginuser">
				</div>
			</div>
		</form>
	</div>
</div>


  

