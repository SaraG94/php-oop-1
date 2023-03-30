<?php

//definiamo una classe movie
class Movie{

    //dichiarare delle variabili d’istanza
    public $title;
    public $subtitle;
    public $vote;
    public $language;

    //definire un costruttore
    function __construct($titleFilm,$subtitleFilm){
        $this->title = $titleFilm;
        $this->subtitle = $subtitleFilm;
    }
    //definire almeno un metodo
}

$film1 = new Movie("Ritorno al futuro","grande giove"){
    $this->vote = 5;
    $this->language = "eng";
};
var_dump($film1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    
</body>
</html>