<?php
namespace src\categorias;

use src\dominios\{JornadaDeTrabajo,InterferenciaEnLaRelacionTrabajoFamilia};

class OrganizacionDelTiempoDelTrabajo
{
    private $_jornadaDeTrabajo;
    private $_interferenciaEnLaRelacionTrabajoFamilia;

    public function __construct
    (
        JornadaDeTrabajo $JornadaDeTrabajo,
        InterferenciaEnLaRelacionTrabajoFamilia $InterferenciaEnLaRelacionTrabajoFamilia
    )
    {
        $this->_jornadaDeTrabajo = $JornadaDeTrabajo;
        $this->_interferenciaEnLaRelacionTrabajoFamilia = $InterferenciaEnLaRelacionTrabajoFamilia;
    }

    public function organizacionDelTiempoDelTrabajo(): int
    {
        return 
        $this->jornadaDeTrabajo()->jornadaDeTrabajo() + 
        $this->interferenciaEnLaRelacionTrabajoFamilia()->interferenciaEnLaRelacionTrabajoFamilia();
    }

    public function jornadaDeTrabajo(): jornadaDeTrabajo
    {
        return $this->_jornadaDeTrabajo;
    }

    public function interferenciaEnLaRelacionTrabajoFamilia(): InterferenciaEnLaRelacionTrabajoFamilia
    {
        return $this->_interferenciaEnLaRelacionTrabajoFamilia;
    }

    public function obtenerRiesgosCualitativos(): string
    {
        $riesgo = '';
        
        if($this->organizacionDelTiempoDelTrabajo() < 4)
        {
            $riesgo = 'Nulo o despreciable';
        }

        if($this->organizacionDelTiempoDelTrabajo() >= 4 && $this->organizacionDelTiempoDelTrabajo() < 6)
        {
            $riesgo = 'Bajo';
        }

        if($this->organizacionDelTiempoDelTrabajo() >= 6 && $this->organizacionDelTiempoDelTrabajo() < 9)
        {
            $riesgo = 'Medio';
        }

        if($this->organizacionDelTiempoDelTrabajo() >= 9 && $this->organizacionDelTiempoDelTrabajo() < 12)
        {
            $riesgo = 'Alto';
        }

        if($this->organizacionDelTiempoDelTrabajo() >= 12)
        {
            $riesgo = 'Muy alto';
        }

        return $riesgo;
    }
}
