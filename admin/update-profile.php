<?php
 session_start();
 include'dbconnection.php';
 $vysledek = mysqli_query($con, "SET CHARACTER SET UTF8");
 $_SESSION['msg']="";
// //Checking session is valid or not
// if (strlen($_SESSION['id']==0)) {
//   header('location:logout.php');
//   } else{

      $ret=mysqli_query($con,"select * from uzivatele where Email='".$_GET['uid']."'");
	  while($row=mysqli_fetch_array($ret))
 // for updating user info

 if(isset($_POST['Submit']))
 {
 	$jmeno=$_POST['jmeno'];
 	$prijmeni=$_POST['prijmeni'];
 	$heslo=$_POST['heslo'];
  if($_POST['heslo'] != $row['Heslo'] ){
  $hash = md5($heslo);
  }
  else{
    $hash = $heslo;
  }
  $cislo=$_POST['cislo'];
   $email=$_POST['email'];
    $vysledek = mysqli_query($con, "SET CHARACTER SET UTF8");
$query=mysqli_query($con,"INSERT INTO uzivatele VALUES ('".$email."','".$jmeno."','".$prijmeni."','".$hash."','".$cislo."')");
 $_SESSION['msg']="Uživatel úspěšně aktualizován";
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

    <title>Admin | Správa uživatele</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link href="assets/css/styl_admin.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet" />
    <link rel="icon" href="assets/img/logo.png">
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>Admin Dashboard</b></a>
            <div class="nav notify-row" id="top_menu">



                </ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right">
                    <li><a class="logout" href="logout.php">Odhlásit</a></li>
            	</ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="#"><img src="assets/img/logo_bile.PNG" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo "Admin";?></h5>

                  <li class="mt">
                      <a href="change-password.php">
                          <i class="fa fa-file"></i>
                          <span>Změnit heslo</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="manage-users.php" >
                          <i class="fa fa-users"></i>
                          <span>Spravovat uživatele</span>
                      </a>

                  </li>

                  <li class="sub-menu">
                      <a href="create_user.php" >
                          <i class="fa fa-user"></i>
                          <span>Nový uživatel</span>
                      </a>

                  </li>
                  <li class="sub-menu">
                      <a href="new_article.php" >
                          <i class="fa fa-pencil"></i>
                          <span>Nový článek</span>
                      </a>

                  </li>
                  <li class="sub-menu">
                      <a href="article_list.php" >
                          <i class="fa fa-list"></i>
                          <span>Seznam článků</span>
                      </a>

                  </li>
                  <li class="sub-menu">
                      <a href="upload_image.php" >
                          <i class="fa fa-file-image-o"></i>
                          <span>Nahrát obrázek</span>
                      </a>

                  </li>


              </ul>
          </div>
      </aside>
      <?php

      $ret=mysqli_query($con,"select * from uzivatele where Email='".$_GET['uid']."'");
	  while($row=mysqli_fetch_array($ret))

	  {?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> <?php echo $row['Jmeno']. " ". $row['Prijmeni'];?> - informace</h3>

				<div class="row">



                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']=""; ?></p>
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                           <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Jméno </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="jmeno" value="<?php echo $row['Jmeno'];?>" >
                              </div>
                          </div>

                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Příjmení</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="prijmeni" value="<?php echo $row['Prijmeni'];?>" >
                              </div>
                          </div>

                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Email </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="email" value="<?php echo $row['Email'];?>">
                              </div>
                          </div>
                               <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Heslo </label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="heslo" value="<?php echo $row['Heslo'];?>" >
                              </div>
                          </div>
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Tel. číslo </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="cislo" value="<?php echo $row['Tel_cislo'];?>">
                              </div>
                          </div>
                          <div style="margin-left:100px;">
                          <input type="submit" name="Submit" value="Uložit" class="btn logout"></div>
                          </form>
                      </div>
                  </div>
              </div>
		</section>
        <?php } ?>
      </section></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <!-- <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script> -->

  </body>
</html>
<?php //} ?>
