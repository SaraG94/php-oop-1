<?php

//definiamo una classe movie
class Movie{

    //dichiarare delle variabili d’istanza
    public $title;
    public $subtitle;
    public $vote;
    public $language;
    public $releaseYear;

    //definire un costruttore
    function __construct($titleFilm,$subtitleFilm){
        $this->title = $titleFilm;
        $this->subtitle = $subtitleFilm;
    }
    //definire almeno un metodo
    function getAgeRelease() {
        
        if(!isset($this->releaseYear)){
          return "Anno uscita mancante";
        }
        
        $annoCorrente = date("Y");    
        return $annoCorrente - $this->releaseYear;
    }
}
//film1
$film1 = new Movie("Ritorno al futuro","grande giove");
$film1->vote = 4.5;
$film1->language ="eng";
$film1->releaseYear = 1985; 

//film2
$film2 = new Movie("Il signore degli anelli","la compagnia dell'anello");
$film2->vote = 5;
$film2->language ="eng";
$film2->releaseYear = 2001;

var_dump($film1,$film1->getAgeRelease(),$film2, $film2->getAgeRelease());
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