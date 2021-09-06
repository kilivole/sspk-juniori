<?php
 session_start();
include'dbconnection.php';
$vysledek = mysqli_query($con, "SET CHARACTER SET UTF8");

 // Pro smazání článku
 if(isset($_GET['id']))
 {
 $clanekid=$_GET['id'];
 $msg=mysqli_query($con,"delete from clanky where ID='$clanekid'");
 if($msg)
 {
echo "<script>alert('Článek smazán');</script>";
 }
}

?><!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Správá článků</title>
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
                          <span>Správa uživatelů</span>
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
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Seznam článků</h3>
				<div class="row">



                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Detaily o všech článcích </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Pořadí</th>
                                  <th>ID</th>
                                  <th>Nadpis</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                              $ret=mysqli_query($con,"select * from clanky");
                              $cnt=1;
                              $results_per_page = 5;
                              $number_of_results = mysqli_num_rows($ret);
                              $number_of_pages = ceil($number_of_results/$results_per_page);

                              if (!isset($_GET['page'])) {
                                $page = 1;
                                } 
                                else {
                                    $page = $_GET['page'];
                                }
                             
                                $this_page_first_result = ($page-1)*$results_per_page;
                                $sqlpoc='SELECT * FROM clanky LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
                                $result = mysqli_query($con, $sqlpoc);

							  while($row=mysqli_fetch_array($result))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['ID'];?></td>
                                  <td><?php echo $row['Nadpis'];?></td>
                                  <td>

                                     <a href="update_article.php?aid=<?php echo $row['ID'];?>">
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                     <a href="article_list.php?id=<?php echo $row['ID'];?>">
                                     <button class="btn btn-danger btn-xs" onClick="return confirm('Opravdu chcete smazat článek?');"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>

                              </tbody>
                          </table>
                          <div class="text-center">
                            <div class="pagination">
                                <?php 
                                
                                for ($i=1;$i<=$number_of_pages;$i++) {
                                    if($i==$page)
                                    echo '<a class="active">'.$i.'</a>';
                                    else
                                        echo '<a href="article_list.php?page=' . $i . '">' . $i . '</a>';
                                }
                                ?>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
		</section>
      </section
  ></section>
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
<?php// } ?>
