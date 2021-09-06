<?php
 session_start();
 include'dbconnection.php';
 $vysledek = mysqli_query($con, "SET CHARACTER SET UTF8");
// //Checking session is valid or not
// if (strlen($_SESSION['id']==0)) {
//   header('location:logout.php');
//   } else{

      $ret=mysqli_query($con,"select * from clanky where ID='".$_GET['aid']."'");
	  while($row=mysqli_fetch_array($ret))
 // for updating user info

 if(isset($_POST['submit_text']))
 {
 	$nadpis=$_POST['nadpis'];
     $text=$_POST['editor'];
     $id = $_GET['aid'];
    $vysledek = mysqli_query($con, "SET CHARACTER SET UTF8");
$query=mysqli_query($con,"UPDATE `clanky` SET `Nadpis`='".$nadpis."', `Text`='".$text."' WHERE `ID`='".$_GET['aid']."'");
 $_SESSION['msg']="Článek úspěšně aktualizován";
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

    <title>Admin | Úprava článku</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link href="assets/css/styl_admin.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet" />
    <link rel="icon" href="assets/img/logo.png">
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
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

      $ret=mysqli_query($con,"select * from clanky where ID='".$_GET['aid']."'");
	  while($row=mysqli_fetch_array($ret))

	  {?>
        <section id="main-content">
          <section class="wrapper">
          <h3><i class="fa fa-angle-right"></i> <?php echo $row['Nadpis'];?> - Aktualizace</h3>

				<div class="row">
                  <div class="col-md-12">
                    <div class="content-panel">
                    <form class="form-horizontal style-form" method="post" action="" onSubmit="return valid();">
                    <p align="center" style="color:#F00;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']=""; ?></p>
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                           <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
                    <h4>Nadpis</h4>
                      <div class="form-group" >
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="nadpis" value="<?php echo $row['Nadpis'];?>" >
                          </div>
                      </div>
                        <h4>Text</h4>

                        <textarea name="editor" id="editor" class="" value=""><?php echo $row['Text']; ?></textarea>

                        <div style="margin-left:100px;">
                        <input class="mt btn logout" type="submit" value="Uložit" name="submit_text">
                        </div>
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

    <script src="assets/ckeditor/ckeditor.js"></script>
    <script>
        // ClassicEditor.create(document.getElementById('editor'));
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );

    </script>

  <!-- <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script> -->

  </body>
</html>
<?php //} ?>
