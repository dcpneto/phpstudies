<?php

    #instanceof checa a ancestralidade com true ou false

class Humano {

    }

    class Animal {

    }

    class Professor extends Humano{

    }

    $marcos = new Humano;
    $machao = new Animal;
    $prof = new Professor;

    if ($marcos instanceof Humano){
        echo "Marcos é um Humano <br>";
    }

    if($machao instanceof Animal){
        echo "Machão é um Animal <br>";
    }

    if ($prof instanceof Humano){
        echo "O professor é um Humano <br>";
    }