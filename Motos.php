<?php
require 'EvidenciaPractica2.php';
    class Motos extends Automovil{

        public function __construct( $matricula, 
         $marca, 
         $modelo, 
        $precio,
        private string $color)
        {
            parent::__construct($matricula, $marca, $modelo, $precio);
        }
    
    public  function getInfo() {
        $color = "<br> su color es: {$this->color} <br>";
        echo parent::getInfo();
        return $color;
    }
    }
        $moto1 = new Motos(
        '9273-JHBD',
        'Honda',
        'Integra',
        120.94,
        'rojo'
        );
       echo $moto1->getInfo();