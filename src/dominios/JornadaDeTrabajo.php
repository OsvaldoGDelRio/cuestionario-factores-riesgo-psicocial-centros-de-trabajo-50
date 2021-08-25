<?php
namespace src\dominios;

use src\dimensiones\JornadasDeTrabajoExtensas;

class JornadaDeTrabajo
{
    private $_jornadasDeTrabajoExtensas;

    public function __construct(JornadasDeTrabajoExtensas $JornadasDeTrabajoExtensas)
    {
        $this->_jornadasDeTrabajoExtensas = $JornadasDeTrabajoExtensas;
    }

    public function jornadaDeTrabajo(): int
    {
        return
        $this->jornadasDeTrabajoExtensas()->jornadasDeTrabajoExtensas();
    }

    public function jornadasDeTrabajoExtensas(): JornadasDeTrabajoExtensas
    {
        return $this->_jornadasDeTrabajoExtensas;
    }

    public function obtenerRiesgosCualitativos(): string
    {
        $riesgo = '';
        
        if($this->jornadaDeTrabajo() < 1)
        {
            $riesgo = 'Nulo o despreciable';
        }

        if($this->jornadaDeTrabajo() >= 1 && $this->jornadaDeTrabajo() < 2)
        {
            $riesgo = 'Bajo';
        }

        if($this->jornadaDeTrabajo() >= 2 && $this->jornadaDeTrabajo() < 4)
        {
            $riesgo = 'Medio';
        }

        if($this->jornadaDeTrabajo() >= 4 && $this->jornadaDeTrabajo() < 6)
        {
            $riesgo = 'Alto';
        }

        if($this->jornadaDeTrabajo() >= 6)
        {
            $riesgo = 'Muy alto';
        }

        return $riesgo;
    }
}