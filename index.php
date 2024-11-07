<?php 

    require "Ape.php";
    require "Frog.php";

    // Domba
    $sheep = new Animal("shaun");
    echo "Name : ". $sheep->get_name() . "<br/>";
    echo "legs : ". $sheep->get_legs() . "<br/>";
    echo "cold blooded : ". $sheep->get_cold_blooded() . "<br/>";
    echo "<br/>";

    // Kodok
    $kodok = new Frog("buduk");
    echo "Name : ". $kodok->name . "<br/>";
    echo "legs : ". $kodok->get_legs() . "<br/>";
    echo "cold blooded : ". $kodok->get_cold_blooded() . "<br/>";
    $kodok->jump();
    echo "<br/>"; 

    // Kera Sakti
    $sungokong = new Ape("kera sakti");
    echo "Name : ". $sungokong->name . "<br/>";
    echo "legs : ". $sungokong->get_legs() . "<br/>";
    echo "cold blooded : ". $sungokong->get_cold_blooded() . "<br/>";
    $sungokong->yell(); 

?>