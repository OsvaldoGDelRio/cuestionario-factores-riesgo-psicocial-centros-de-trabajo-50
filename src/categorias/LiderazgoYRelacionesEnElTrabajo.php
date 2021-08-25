<?php
namespace src\categorias;

use src\dominios\{Liderazgo,RelacionesEnElTrabajo,Violencia};

class LiderazgoYRelacionesEnElTrabajo
{
    private $_liderazgo;
    private $_relacionesEnElTrabajo;
    private $_violencia;

    public function __construct
    (
        Liderazgo $Liderazgo,
        RelacionesEnElTrabajo $RelacionesEnElTrabajo,
        Violencia $Violencia
    )
    {
        $this->_liderazgo = $Liderazgo;
        $this->_relacionesEnElTrabajo = $RelacionesEnElTrabajo;
        $this->_violencia = $Violencia;
    }

    public function liderazgoYRelacionesEnElTrabajo(): int
    {
        return 
        $this->liderazgo()->liderazgo() + 
        $this->relacionesEnElTrabajo()->relacionesEnElTrabajo() + 
        $this->violencia()->violencia();
    }

    public function liderazgo(): Liderazgo
    {
        return $this->_liderazgo;
    }

    public function relacionesEnElTrabajo(): RelacionesEnElTrabajo
    {
        return $this->_relacionesEnElTrabajo;
    }

    public function violencia(): Violencia
    {
        return $this->_violencia;
    }

    public function obtenerRiesgosCualitativos(): string
    {
        $riesgo = '';
        
        if($this->liderazgoYRelacionesEnElTrabajo() < 10)
        {
            $riesgo = 'Nulo o despreciable';
        }

        if($this->liderazgoYRelacionesEnElTrabajo() >= 10 && $this->liderazgoYRelacionesEnElTrabajo() < 18)
        {
            $riesgo = 'Bajo';
        }

        if($this->liderazgoYRelacionesEnElTrabajo() >= 18 && $this->liderazgoYRelacionesEnElTrabajo() < 28)
        {
            $riesgo = 'Medio';
        }

        if($this->liderazgoYRelacionesEnElTrabajo() >= 28 && $this->liderazgoYRelacionesEnElTrabajo() < 38)
        {
            $riesgo = 'Alto';
        }

        if($this->liderazgoYRelacionesEnElTrabajo() >= 38)
        {
            $riesgo = 'Muy alto';
        }

        return $riesgo;
    }
}