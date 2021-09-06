<?php
class Ser_conn{
 private $servername; //= "localhost"; //adresa databáze serveru
 private $username; //= "root"; //přihlašovací jméno do databáse
 private $password; //= ""; //heslo pro přihlášení do databáse
 private $dbname; //= "sspk_zakovsky_oddil"; //jméno databáse
 private $kodovani; // = "SET CHARACTER SET UTF8"; //dotaz SQL pro vybrání VŠECH nadpisů z databáse


 function __construct($servername, $username, $password, $dbname,$kodovani)
 {
  $this->servername = $servername;
  $this->username = $username;
  $this->password = $password;
  $this->dbname = $dbname;
  $this->kodovani = $kodovani;
  }

 public function clanky(){
 $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname); //navázání spojení s databásí
 $vysledek = mysqli_query($conn, $this->kodovani);
 $sql = "SELECT id, Nadpis, Text FROM clanky"; //dotaz SQL pro vybrání VŠECH nadpisů z databáse
 $vysledek = mysqli_query($conn, $sql);

 if (mysqli_num_rows($vysledek) > 0) { //Rozložení všech článků do pole
     while($pole = mysqli_fetch_assoc($vysledek)) {
         $data_clanky[]=$pole;
     }
 }
 return $data_clanky;
 mysqli_close($conn); //ukončení spojení s databásí
 }

 public function clanky_vse($page){
 $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname); //navázání spojení s databásí
 $vysledek = mysqli_query($conn, $this->kodovani);
 $sql_1 = "SELECT * FROM clanky"; //dotaz SQL pro vybrání VŠECH nadpisů z databáse
 $ret = mysqli_query($conn, $sql_1);
 $results_per_page = 5;
 $number_of_results = mysqli_num_rows($ret);
 $number_of_pages = ceil($number_of_results/$results_per_page);
 $this_page_first_result = ($page-1)*$results_per_page;
 $sql = "SELECT * FROM clanky LIMIT ". $this_page_first_result . ',' .  $results_per_page; //dotaz SQL pro vybrání VŠECH nadpisů z databáse
 $vysledek = mysqli_query($conn, $sql);

 if (mysqli_num_rows($vysledek) > 0) { //Rozložení všech článků do pole
     while($pole = mysqli_fetch_assoc($vysledek)) {
         $data_clanky[]=$pole;
     }
 }
 return $data_clanky;
 mysqli_close($conn); //ukončení spojení s databásí
 }


 public function obrazky(){
 $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname); //navázání spojení s databásí
 $vysledek = mysqli_query($conn, $this->kodovani);
 $sql_2 = "SELECT ID, URL_obr, Clanek, Popis FROM obrazky"; //dotaz SQL pro vybrání VŠECH obrázků z databáse
 $vysledek_2 = mysqli_query($conn, $sql_2);

 if (mysqli_num_rows($vysledek_2) > 0) { //Rozložení všech obrázků do pole
     while($pole_2 = mysqli_fetch_assoc($vysledek_2)) {
         $data_obrazky[]=$pole_2;
     }
 }
 return $data_obrazky;
 mysqli_close($conn); //ukončení spojení s databásí
 }


 public function heslo($email){
 $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname); //navázání spojení s databásí
 $vysledek = mysqli_query($conn, $this->kodovani);
 $sql_3 = "SELECT Heslo FROM uzivatele WHERE Email = \"$email\""; //dotaz SQL na heslo k emailu z formuláře
 $vysledek_3 = mysqli_query($conn, $sql_3);

 if (mysqli_num_rows($vysledek_3) > 0) { //Rozložení všech hesel schodujících se s podmínkou do pole
     while($pole_3 = mysqli_fetch_assoc($vysledek_3)) {
         $data_heslo[]=$pole_3;
     }
 }
 return $data_heslo;
 mysqli_close($conn); //ukončení spojení s databásí
}
public function Clanek_ID($id){
$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname); //navázání spojení s databásí
$vysledek = mysqli_query($conn, $this->kodovani);
$sql_4 = "SELECT id, Nadpis,Text FROM clanky WHERE ID = \"$id\""; //dotaz SQL na heslo k emailu z formuláře
$vysledek_4 = mysqli_query($conn, $sql_4);

if (mysqli_num_rows($vysledek_4) > 0) { //Rozložení všech hesel schodujících se s podmínkou do pole
    while($pole_4 = mysqli_fetch_assoc($vysledek_4)) {
        $data_clanek1[]=$pole_4;
    }
}
return $data_clanek1;
mysqli_close($conn); //ukončení spojení s databásí
}
public function Obrazek_ID($id){
$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname); //navázání spojení s databásí
$vysledek = mysqli_query($conn, $this->kodovani);
$sql_4 = "SELECT ID, URL_obr, Clanek FROM obrazky WHERE Clanek = \"$id\""; //dotaz SQL na heslo k emailu z formuláře
$vysledek_4 = mysqli_query($conn, $sql_4);

if (mysqli_num_rows($vysledek_4) > 0) { //Rozložení všech hesel schodujících se s podmínkou do pole
    while($pole_4 = mysqli_fetch_assoc($vysledek_4)) {
        $data_obrazek[]=$pole_4;
    }
}
return $data_obrazek;
mysqli_close($conn); //ukončení spojení s databásí
}

}
?>
