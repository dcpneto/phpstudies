<?php
    #traits permite o reuso de código sem hierarquia de classes e a palavra reservada é use

    trait Objeto {

        public function teste(){
            echo "Testando a trait <br>";
        }

    }

    trait Testando {

        public function traitTeste(){
            echo "Este objeto é da trait testando <br>";
        }

    }

    class Central {

        use Objeto;
        use Testando;

    }

    $x = new Central;

    $x->teste();
    $x->traitTeste();