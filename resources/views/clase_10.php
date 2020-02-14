
<?php
// class Coche {
//     //public $color;
//    // public $potencias;
//     //public $marcas;
//     private$color='red';
//     protected $potencia=120;
//     public $marca='audi';
    

//     public function getColor()
// {
//     return $this->color;
// }
// public function getPotencia()
// {
//     return $this->potencia;
// }
// public function getMarca()
// {
//     return $this->marca;
// }
// }
// class CocheDeLujo extends Coche {
//     public function displayColor()
//     {
//         return $this->color;
//     }
//     public function displayPotencia()
//         {
//             return $this->potencia;
//         }
//         public function displayMarca()
//         {
//             return $this->marca;
//         }

// }

// $miNuevoCoche= new CocheDeLujo();
// echo 'Color del coche es: ' . $miNuevoCoche->displayColor();
// echo '<br>';
// echo 'Potencia es: ' . $miNuevoCoche->displayPotencia();
// echo '<br>';
// echo 'La marca es: ' . $miNuevoCoche->displayMarca();




// $miCoche = new Coche();
// $miCoche->color = 'rojo';
// $miCoche->potencia = 120;
// $miCoche->marca = 'audi';

// //echo 'Color del coche: ' . $miCoche->color; //Muestra Color del coche:rojo
// echo 'Color del coche es: ' . $miCoche->getColor();
// echo '<br>';
// echo 'Potencia es: ' . $miCoche->getPotencia();
// echo '<br>';
// echo 'La marca es: ' . $miCoche->getMarca();

// function printCaracteristicas ($cocheConcreto)
// {
//     echo 'color:' . $cocheConcreto->getColor();
//     echo "\n";
//     echo 'Potencia: ' . $cocheConcreto-> getPotencia ();
//     echo "\n";
//     echo 'Marca:'. $cocheConcreto->getMarca();
// }
// $miCoche = new Coche();
// $miCoche->color ='rojo';
// $miCoche->potencia = 120;
// $miCoche->marca='audi';
// $otroCoche= new Coche();
// $otroCoche->color='azul';
// $otroCoche->potencia =100;
// $otroCoche->marca='bmw';

// //printCaracteristicas($miCoche);
// echo "\n";
// printCaracteristicas($otroCoche);

// class Coche {
//     protected $color;
//     public function setColor($color)
//     {
//         $this->color = $color;
//     }
//     public function getColor()
//     {
//         return $this->color;
//     }
//     public function printCaracteristicas()
//     {
//         echo 'Color: '. $this->getColor;
//     }
// }
// class CocheDeLujo extends Coche {
//     public $extras;
//     public function setExtras($extras)
//     {
//         $this->extras = $extras;
//     }
//     public function getExtras()
//     {
//         return $this->extras;
//     }
//     public function printCaracteristicas()
//     {
//         echo 'Color: '. $this->color;
//         echo '<hr/>';
//         echo 'Extras: ' . $this->extras;
//     }
// }

// $miCoche = new CocheDeLujo();
// $miCoche->setColor('negro');
// $miCoche->setExtras('TV');

// $miCoche->printCaracteristicas(); 
// class Coche {
//     public $color;

//     public function __construct($color)
//     {
//         $this->color = $color;
//     }
// }

// $miCoche = new Coche('Rojo');
// echo $miCoche->color; // Devuelve Rojo

//clase 11




?>