<?php
namespace src\categorias;

use src\dominios\CondicionesEnElAmbienteDeTrabajo;

class AmbienteDeTrabajo
{
    private $_condicionesEnElAmbienteDeTrabajo;

    public function __construct(CondicionesEnElAmbienteDeTrabajo $CondicionesEnElAmbienteDeTrabajo)
    {
        $this->_condicionesEnElAmbienteDeTrabajo = $CondicionesEnElAmbienteDeTrabajo;
    }

    public function ambienteDeTrabajo(): int
    {
        return $this->condicionesEnElAmbienteDeTrabajo()->condicionesEnElAmbienteDeTrabajo();
    }

    public function condicionesEnElAmbienteDeTrabajo(): CondicionesEnElAmbienteDeTrabajo
    {
        return $this->_condicionesEnElAmbienteDeTrabajo;
    }

    public function obtenerRiesgosCualitativos(): string
    {
        $riesgo = '';
        
        if($this->ambienteDeTrabajo() < 3)
        {
            $riesgo = 'Nulo o despreciable';
        }

        if($this->ambienteDeTrabajo() >= 3 && $this->ambienteDeTrabajo() < 5)
        {
            $riesgo = 'Bajo';
        }

        if($this->ambienteDeTrabajo() >= 5 && $this->ambienteDeTrabajo() < 7)
        {
            $riesgo = 'Medio';
        }

        if($this->ambienteDeTrabajo() >= 7 && $this->ambienteDeTrabajo() < 9)
        {
            $riesgo = 'Alto';
        }

        if($this->ambienteDeTrabajo() >= 9)
        {
            $riesgo = 'Muy alto';
        }

        return $riesgo;
    }
}