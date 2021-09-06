<?php
session_start();
require ("libs/Smarty.class.php"); // použití Smarty proměných
require ("php_kody/tridy.php"); //připojení php kodu
require ("php_kody/server_conn.php"); // připojení komunikace s databází
require ("php_kody/tahani_z_DB.php"); // připojení souboru, kde jsou vytažené objekty z tabaáze

$smarty = new Smarty();

if(!isset($_SESSION["verify"])){
$_SESSION["verify"] = 0;
}
if(isset($_POST['email'], $_POST['psw'])){
   $passw = new Heslo($_POST['psw'],$_POST['email']);
   //$passw = new Heslo("cisco","maximhruska@seznam.cz");
   $verify = $passw->verify();

   if($verify == true){
     $_SESSION["verify"] = 1;

  if($_POST['email'] == "Admin"){
   header('Location: admin/manage-users.php');
  }
   }

}

if(isset($_POST['logout'])){
  if($_POST['logout']=="logout"){
     $_SESSION["verify"] = 0;
      }
}

$nadpis = array();
$text = array();
$id_cl = array();
$pocet_cl = count($data_clanky)-1;
$y = 0;
for($x = $pocet_cl; $x >= 0; $x--){
$id_cl[$y] = $data_clanky[$x]['id'];
$nadpis[$y] = $data_clanky[$x]['Nadpis'];
$text[$y] = $data_clanky[$x]['Text'];
$y++;
}
$pocet = $pocet_cl;
$p_n_STR = (5*$page)-1;
if($pocet<$p_n_STR){
  $p_n_STR = $pocet;
}
$num_cl = ($page-1)*5;
$smarty->assign("p_n_STR",$p_n_STR);
$smarty->assign("num_cl",$num_cl);
$smarty->assign("pocet",$pocet);
$smarty->assign("id_cl",$id_cl);
$smarty->assign("nadpis",$nadpis);
$smarty->assign("text",$text);

$smarty->assign("verify",$_SESSION["verify"]);
$number_of_pages = $pocet_cl/5;
$smarty->assign("number_of_pages",$number_of_pages);
$smarty->assign("page",$page);


$smarty->display("clanky.tpl");

?>
