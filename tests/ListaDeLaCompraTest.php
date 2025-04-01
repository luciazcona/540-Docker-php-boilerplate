<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\ListaDeLaCompra;
use PHPUnit\Framework\TestCase;

class ListaDeLaCompraTest extends TestCase
{
    private ListaDeLaCompra $listaDeLaCompra;
    protected function setUp(): void
    {
        parent::setUp();

        $this->listaDeLaCompra = new ListaDeLaCompra();
    }

    /**
     * @test
     **/
    public function givenProductWithoutQuantityReturnsOne(): void
    {
        $result = $this->listaDeLaCompra->process("añadir Pan");

        $this->assertEquals("pan x1", $result);
    }

    /**
     * @test
     **/
    public function givenProductWithQuantityReturnsQuantity(): void
    {
        $result = $this->listaDeLaCompra->process("añadir Pan 2");

        $this->assertEquals("pan x2", $result);
    }

    /**
     * @test
     **/
    public function givenProductFoundedInTheListWithQuantityReturnsSumQuantity(): void
    {
        $result = $this->listaDeLaCompra->process("añadir Pan 2");

        $this->assertEquals("pan x2", $result);
    }

    /**
     * @test
     **/
    public function givenTwoProductsReturnsListWithQuantities(): void
    {
        $result = $this->listaDeLaCompra->process("añadir Leche 3");

        $this->assertEquals("leche x3", $result);
    }


}
