<?php
    #Classes abstratas não podem ser instanciadas
    #Podem ter metodos abstratos que devem ser implementados obrigatoriamente de uma classe sem herdar a abstrata
    #A palavra reservada é abstract

    abstract class Teste {
        public static function testandoClasse(){
            echo "Este método é de uma classe abstrata <br>";
        }

        abstract public function testeAbs();
    }

    #Deu erro pq não pode instanciar
    //$t = new Teste; 

    Teste::testandoClasse(); #a IDE vai reclamar pq não é estático, resolve lançando um static lá na funcao

    class Nova extends Teste{

        public function testeAbs()
        {
            echo "Teste médoto abstrato <br>";
        }

    }

    $n = new Nova;
    $n->testeAbs();