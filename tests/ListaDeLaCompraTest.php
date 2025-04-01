<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\ListaDeLaCompra;
use PHPUnit\Framework\TestCase;

class ListaDeLaCompraTest extends TestCase
{
    /**
     * @test
     **/
    public function givenAWordInUppercaseReturnTheSameWordInLowercase(): void
    {
        $listaDeLaCompra = new ListaDeLaCompra();

        $result = $listaDeLaCompra->process("Pan");

        $this->assertEquals("pan", $result);

    }

    /**
     * @test
     **/
    public function givenProductWithoutQuantityReturnsOne(): void
    {
        $listaDeLaCompra = new ListaDeLaCompra();

        $result = $listaDeLaCompra->process("añadir Pan");

        $this->assertEquals("pan x1", $result);
    }

    /**
     * @test
     **/
    public function givenProductWithQuantityReturnsQuantity(): void
    {
        $listaDeLaCompra = new ListaDeLaCompra();

        $result = $listaDeLaCompra->process("añadir Pan 2");

        $this->assertEquals("pan x2", $result);
    }


}
