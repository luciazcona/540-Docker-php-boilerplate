<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaDeLaCompra
{

    public function process(string $producto): string
    {
        $intruccion = explode(" ", strtolower($producto));

        if(count($intruccion) === 2) {
            return $intruccion[1] . " x1";
        }
        if(count($intruccion) === 3) {
            return $intruccion[1] . " x". $intruccion[2];
        }

        return strtolower($producto);
    }
}
