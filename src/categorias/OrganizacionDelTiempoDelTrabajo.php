<?php
namespace src\categorias;

use Exception;
use src\dominios\{JornadaDeTrabajo,InterferenciaEnLaRelacionTrabajoFamilia};

class OrganizacionDelTiempoDelTrabajo
{
    private $_jornadaDeTrabajo;
    private $_interferenciaEnLaRelacionTrabajoFamilia;
    private $_niveles = array(
        '0-4' => 'Nulo o despreciable',
        '4-6' => 'Bajo',
        '6-9' => 'Medio',
        '9-12' => 'Alto',
        '12-99' => 'Muy alto'
    );

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
        foreach ($this->_niveles as $k => $v)
        {
            $uno = explode('-',$k)[0];
            $dos = explode('-',$k)[1];
            if($this->organizacionDelTiempoDelTrabajo() >= $uno && $this->organizacionDelTiempoDelTrabajo() < $dos)
            {
                return $v;
            }
        }

        throw new Exception("Error para obtener riesgo cualitativo", 1);
    }
}
