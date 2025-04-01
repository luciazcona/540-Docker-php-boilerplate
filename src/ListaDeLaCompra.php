<?php

namespace Deg540\DockerPHPBoilerplate;

use function Sodium\add;

class ListaDeLaCompra
{

    public function process(string $producto): string
    {
        $lista = [];
        $intruccion = explode(" ", strtolower($producto));

        if(count($intruccion) === 2) {
            $intruccion = $intruccion[1] . " x1";
            return $intruccion;
        }

        if(count($intruccion) === 3) {
            $intruccion = $intruccion[1] . " x". $intruccion[2];
            return $intruccion;
        }

        $lista[] = $intruccion;

        return implode(", ", $lista);
    }
}
