<?php
session_start();
include("admin/dbconnection.php");
if(isset($_POST['login']))
{
  $adminusername=$_POST['username'];
  $pass=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM uzivatele WHERE Email='$adminusername' and Heslo='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="admin/manage-users.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['email'] = "Admin";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
$_SESSION['action1']="*Invalid username or password";
$extra="index.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}

?>


<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Login</title>
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet">
    <link href="admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="admin/assets/css/style.css" rel="stylesheet">
    <link href="admin/assets/css/styl_admin.css" rel="stylesheet">
    <link rel="icon" href="admin/assets/img/logo.png">
  </head>

  <body class="background">
	  	<div class="container">


		      <form class="form-login" action="" method="post">
		        <h2 class="form-login-heading">Adminský panel</h2>
                  <p>
                    <?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
		        <div class="login-wrap">
		            <input type="text" name="username" class="form-control" placeholder="Uživatelské jméno" autofocus>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Heslo"><br >
		            <input  name="login" class="btn" type="submit">

		        </div>
		      </form>

	  	</div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>


  </body>
</html>
