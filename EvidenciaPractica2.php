<?php

    class Automovil{

        public function __construct(private string $matricula, 
        private string $marca, 
        private string $modelo, 
        private float $precio)
        {}

    

    public function getInfo()
    {
    $info = "<b> $this->marca </b> 
    <b>de modelo :$this->modelo</b> 
    con un precio de :$this->precio<br> ";
    return $info;
    }
}
    $automovil1 = new Automovil(
        '893-TVZ',
        'Toyota',
        'Cambry',
        5004.44
    );

    echo $automovil1->getInfo();

    $automovil2 = new Automovil(
        '8873-TRE',
        'BENTLEY',
        'CONTINENTAL GT',
        546.94
    );

    //var_dump($automovil);

    //echo $automovil;