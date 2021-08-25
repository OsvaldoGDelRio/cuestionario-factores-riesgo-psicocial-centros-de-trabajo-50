<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 16
*/
use src\CuestionarioFrp;

class InfluenciaDelTrabajoFueraDelCentroLaboral
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function influenciaDelTrabajoFueraDelCentroLaboral(): int
    {
        return
        $this->_cuestionarioFrp->tiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares()->pregunta16Valor();
    }
}