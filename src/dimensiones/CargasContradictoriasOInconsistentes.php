<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 12 y 13
*/
use src\CuestionarioFrp;

class CargasContradictoriasOInconsistentes
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function cargasContradictoriasOInconsistentes(): int
    {
        return
        $this->_cuestionarioFrp->actividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene()->pregunta12Valor() +
        $this->_cuestionarioFrp->actividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene()->pregunta13Valor();
    }
}