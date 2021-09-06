<?php


/**
 * Třída která bude sloužit na vyspání článků
 */
class Clanky
{
   private $id;  //číslo článku
   private $nadpis; //Nadpis článku
   private $text; //text článku
  /**
   * konstruktor, volá se při založení nové instance
   */
  function __construct($id, $nadpis, $text)
  {
   $this->id = $id;
   $this->nadpis = $nadpis;
   $this->text = $text;

  }
  /**
   * přístupová metoda ID -> vrací hodnotu ID
   */
  public function getId(){
      return $this->id;


  }
  /**
   * přístupová metoda Nadpisu -> vrací hodnotu Nadpisu
   */
  public function getNadpis(){
      return $this->nadpis;


  }
  /**
   * přístupová metoda textu -> vrací hodnotu textu
   */
  public function getText(){
      return $this->text;


  }

  /**
   * přístupová metoda Nadpisu -> nastaví hodnotu Nadpisu
   */
  function setNadpis($nadpis){

          $this->nadpis = $nadpis;

    }
    /**
     * přístupová metoda textu -> vrací hodnotu textu
     */
  function setText($text){

          $this->text = $text;

    }
    /**
     * Funkce na vypsání Nadpisu
     */
  public function vypisNadpis(){
        echo $this->nadpis;
  }
  /**
   * funkce na vypsání textu
   */
  public function vypisText(){
        echo $this->text;
  }

}
/**
 * třída obrázky pro zobrazování obrázků
 */
class Obrazky{
  private $id;  //číslo obrázku
  private $URL_obr; //URL cesta k obrázku
  private $Clanek; //Číslo článku ke kterému obrázek patří

  function __construct($id, $URL_obr, $Clanek)
  {
   $this->id = $id;
   $this->URL_obr = $URL_obr;
   $this->Clanek = $Clanek;

  }
  /**
   * přístupová metoda getID -> vrací hodnotu ID
   */
  function getId(){
    return $this->id;
  }
  /**
   * přístupová metoda getURL_obr -> vrací hodnotu adresy obrázku
   */
  function getURL(){
    return $this->URL_obr;
  }
  /**
   * přístupová metoda getClanek -> vrací hodnotu čísla článku ke kterému obrázek patří
   */
  function getClanek(){
    return $this->Clanek;
  }


}

/**
 * Objekt heslo, pro ověření správnosti hesla.
 */
 class Heslo{
    private $email; //otisk hesla z databáze
    private $password; //heslo z formuláře

    function __construct($pass, $email)
    {
     $this->email = $email; //hash z databáze
     $this->password = $pass; //heslo z formuláře

    }
    /**
     * přístupová metoda getHash -> vrací hodnotu atributu hash
     */
    public function getEmail(){
      return $this->email;
    }
    /**
     * přístupová metoda getPassword -> vrací hodnotu atributu password
     */
    public function getPassword(){
      return $this->password;
    }
    /**
     * přístupová metoda setHash -> nastaví novou hodnotu atributu hash
     */
  public function setEmail($email){
      $this->hash=$email;
    }
    /**
     * přístupová metoda setPassword -> nastaví novou hodnotu atributu password
     */
  public  function setPassword($pass){
      $this->password=$pass;
    }
    /**
     * metoda verify -> slouží k ověření hesla z formuláře a tabulky
     */
  public  function verify(){
      $pass_1 = md5($this->password);
      $ser_con = new Ser_conn("localhost","root","","sspkju1581004630","SET CHARACTER SET UTF8");
      $data_heslo = $ser_con->heslo($this->email);
      if ($pass_1 == $data_heslo[0]["Heslo"]) {
        $verify = true;
       return $verify;
      }
      else {
        $verify = false;
       return $verify;
      }
    }
 }


?>
