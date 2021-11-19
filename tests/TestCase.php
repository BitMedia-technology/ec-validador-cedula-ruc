<?php

namespace Bitmedia\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use Bitmedia\ValidatorEc;

class TestCase extends BaseTestCase
{
    /**
     * Validador.
     *
     * Guarda Instancia de clase ValidarIdentificacion() disponible para todos los métodos
     *
     * @var string
     */
    protected $validador;

    /**
     * Inicio objecto Validador().
     */
    protected function setUp():void
    {
        $this->validador = new ValidatorEc();
    }
}