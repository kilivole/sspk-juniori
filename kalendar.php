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
$smarty->assign("verify",$_SESSION["verify"]);
//if($_SESSION["verify"] == 1){
$smarty->display("kalendar.tpl");
//}

?>
