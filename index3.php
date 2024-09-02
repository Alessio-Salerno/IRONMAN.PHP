<?php

// Le classi abstract 1 - 2 sono già state richiamate nelle clasi figlie, quindi non c'è bisogno di richiamarle nelle classi figlie



require_once('laser.php');
require_once('repulser.php');
require_once('flight.php');
require_once('shield.php');


class IronmanArmor{
    public $attacco;
    public $difesa;

    public static $counter = 0;

    public function __construct(Attacco $attacco , Difesa $difesa){
        $this-> attacco = $attacco;

        $this->difesa = $difesa;
   
        self::$counter++;

    }

    public function ironmanAttacco(){
        $this->attacco->attacco();
    }

  public function ironmanDifesa(){
    $this->difesa->difesa();
  }


}

$ironman = new IronmanArmor(new Laser(), new Shield());
// var_dump($ironman);


$ironman-> ironmanAttacco();
$ironman->ironmanDifesa();

echo IronmanArmor::$counter . "\n";


$ironman2 = new IronmanArmor(new Repulser(), new Flight());

?>