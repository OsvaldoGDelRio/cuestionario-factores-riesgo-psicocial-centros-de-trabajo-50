<?php
namespace src\dominios;

use src\dimensiones\ViolenciaLaboral;

class Violencia
{
    private $_violenciaLaboral;

    public function __construct(ViolenciaLaboral $ViolenciaLaboral)
    {
        $this->_violenciaLaboral = $ViolenciaLaboral;
    }

    public function violencia(): int
    {
        return $this->violenciaLaboral()->violenciaLaboral();
    }

    public function violenciaLaboral(): ViolenciaLaboral
    {
        return $this->_violenciaLaboral;
    }

    public function obtenerRiesgosCualitativos(): string
    {
        $riesgo = '';
        
        if($this->violencia() < 7)
        {
            $riesgo = 'Nulo o despreciable';
        }

        if($this->violencia() >= 7 && $this->violencia() < 10)
        {
            $riesgo = 'Bajo';
        }

        if($this->violencia() >= 10 && $this->violencia() < 13)
        {
            $riesgo = 'Medio';
        }

        if($this->violencia() >= 13 && $this->violencia() < 16)
        {
            $riesgo = 'Alto';
        }

        if($this->violencia() >= 16)
        {
            $riesgo = 'Muy alto';
        }

        return $riesgo;
    }
}