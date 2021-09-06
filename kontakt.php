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

$smarty->assign("cl1",$cl1);
$smarty->assign("cl2",$cl2);
$smarty->assign("cl3",$cl3);

$smarty->assign("o_nas",$o_nas);
$smarty->assign("Priprava_forma",$Priprava_forma);
$smarty->assign("Fomei_cup_jicin",$Fomei_cup_jicin);
$smarty->assign("Strelnice_DDM",$Strelnice_DDM);
$smarty->assign("Strelnice_SSPK",$Strelnice_SSPK);
$smarty->assign("Tabor",$Tabor);

$smarty->assign("Tabor_nastup",$Tabor_nastup);
$smarty->assign("Fomei_Cup_Alblova",$Fomei_Cup_Alblova);
$smarty->assign("Fomei_Cup_dopadiste",$Fomei_Cup_dopadiste);
$smarty->assign("Odstrelovac",$Odstrelovac);
$smarty->display("kontakt.tpl");

?>
