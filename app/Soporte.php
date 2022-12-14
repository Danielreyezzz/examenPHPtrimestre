<?php
//Abstrayendo la clase conseguimos que sea imposible de instanciar
//Esto nos viene bien para evitar errores, sobre todo si varias personas trabajan en el código
//Evitas que nadie instancie una clase que no tiene que ser instanciada
namespace examenPHPtrimestre\app;


abstract class Soporte implements iResumible
{
        const IVA = 1.21;
        public bool $alquilado = false;
        public function __construct(
                public String $titulo,
                protected int $numero,
                private float $precio,
        ) {
        }
        public function getNumero()
        {
                return $this->numero;
        }

        public function getPrecio()
        {
                return $this->precio;
        }

        public function getPrecioConIva()
        {
                return $this->precio * $this::IVA;
        }
        public function getAlquilado()
        {
                return $this->alquilado;
        }

        public function setAlquilado($alquilado)
        {
                $this->alquilado = $alquilado;

                return $this;
        }


        public function muestraResumen()
        {
                echo "</br>RESUMEN:</br>Título: " .  $this->titulo . "</br>" .
                        "Número: " .  $this->numero . "</br>"  .
                        "Precio: " . $this->precio . "</br>" .
                        "Precio con IVA: " .  $this->getPrecioConIva() . "</br>";
        }
}
