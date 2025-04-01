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
            $lista[] = $intruccion[1] . " x1";
        }

        if(count($intruccion) === 3) {
            $lista[] = $intruccion[1] . " x". $intruccion[2];
        }

        $listaDeLaCompra = implode(", ", $lista);

        return $listaDeLaCompra;
    }
}
