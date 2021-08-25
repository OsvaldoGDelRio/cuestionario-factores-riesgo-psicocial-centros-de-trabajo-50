<?php
namespace src;

interface FactoryInterface
{
    public function crear(string $nombreDeLaClase, array $parametros): object;
}