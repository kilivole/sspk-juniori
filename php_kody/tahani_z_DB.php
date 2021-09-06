<?php

$ser_con = new Ser_conn("localhost","root","","sspkju1581004630","SET CHARACTER SET UTF8");
if (!isset($_GET['page'])) {
  $page = 1;
  }
  else {
      $page = $_GET['page'];
  }
$data_clanky = $ser_con->clanky();
$data_clanky_vse = $ser_con->clanky_vse($page);
$data_obrazky = $ser_con->obrazky();
$pocet_obr = count($data_obrazky);

//když uživatel kline na "více" v novinkách
if(isset($_GET['idc'])){
  $clanek_podle_id = $ser_con->Clanek_ID($_GET['idc']);
  $clanek_dle_id = new Clanky($clanek_podle_id[0]["id"],$clanek_podle_id[0]["Nadpis"],$clanek_podle_id[0]["Text"]);
  $Obrazek_podle_id = $ser_con->Obrazek_ID($_GET['idc']);
  $obrazek_id = new Obrazky($Obrazek_podle_id[0]["ID"],$Obrazek_podle_id[0]["URL_obr"],$Obrazek_podle_id[0]["Clanek"]);

}
//nejnovější články
$delka = count($data_clanky);  //počet článků
$cl1 = $o_nas = new Clanky($data_clanky[$delka-1]["id"],$data_clanky[$delka-1]["Nadpis"],$data_clanky[$delka-1]["Text"]);
$cl2 = $o_nas = new Clanky($data_clanky[$delka-2]["id"],$data_clanky[$delka-2]["Nadpis"],$data_clanky[$delka-2]["Text"]);
$cl3 = $o_nas = new Clanky($data_clanky[$delka-3]["id"],$data_clanky[$delka-3]["Nadpis"],$data_clanky[$delka-3]["Text"]);

//clanky -> (id,nadpis,text)
$o_nas = new Clanky($data_clanky[0]["id"],$data_clanky[0]["Nadpis"],$data_clanky[0]["Text"]);
$Priprava_forma = new Clanky($data_clanky[1]["id"],$data_clanky[1]["Nadpis"],$data_clanky[1]["Text"]);
$Strelnice_DDM = new Clanky($data_clanky[2]["id"],$data_clanky[2]["Nadpis"],$data_clanky[2]["Text"]);
$Strelnice_SSPK = new Clanky($data_clanky[3]["id"],$data_clanky[3]["Nadpis"],$data_clanky[3]["Text"]);
$Nabor = new Clanky($data_clanky[4]["id"],$data_clanky[4]["Nadpis"],$data_clanky[4]["Text"]);
$Tabor = new Clanky($data_clanky[5]["id"],$data_clanky[5]["Nadpis"],$data_clanky[5]["Text"]);
$Fomei_cup_jicin = new Clanky($data_clanky[6]["id"],$data_clanky[6]["Nadpis"],$data_clanky[6]["Text"]);
//obrazky -> (id, URL_obr, Clanek)
$Tabor_nastup = new Obrazky($data_obrazky[0]["ID"],$data_obrazky[0]["URL_obr"],$data_obrazky[0]["Clanek"]);
$Fomei_Cup_Alblova = new Obrazky($data_obrazky[1]["ID"],$data_obrazky[1]["URL_obr"],$data_obrazky[1]["Clanek"]);
$Fomei_Cup_dopadiste = new Obrazky($data_obrazky[2]["ID"],$data_obrazky[2]["URL_obr"],$data_obrazky[2]["Clanek"]);
$Fomei_Cup_streliste = new Obrazky($data_obrazky[3]["ID"],$data_obrazky[3]["URL_obr"],$data_obrazky[3]["Clanek"]);
$Fomei_Cup_Streliste_2 = new Obrazky($data_obrazky[4]["ID"],$data_obrazky[4]["URL_obr"],$data_obrazky[4]["Clanek"]);
$Odstrelovac = new Obrazky($data_obrazky[5]["ID"],$data_obrazky[5]["URL_obr"],$data_obrazky[5]["Clanek"]);
$Obed = new Obrazky($data_obrazky[6]["ID"],$data_obrazky[6]["URL_obr"],$data_obrazky[6]["Clanek"]);
$Strelecka = new Obrazky($data_obrazky[7]["ID"],$data_obrazky[7]["URL_obr"],$data_obrazky[7]["Clanek"]);
$Tabor_priprava = new Obrazky($data_obrazky[8]["ID"],$data_obrazky[8]["URL_obr"],$data_obrazky[8]["Clanek"]);
$Zdravoveda = new Obrazky($data_obrazky[9]["ID"],$data_obrazky[9]["URL_obr"],$data_obrazky[9]["Clanek"]);




 ?>
