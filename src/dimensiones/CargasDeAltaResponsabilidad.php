<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 10 y 11
*/
use src\CuestionarioFrp;

class CargasDeAltaResponsabilidad
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function cargasDeAltaResponsabilidad(): int
    {
        return
        $this->_cuestionarioFrp->actividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene()->pregunta10Valor() +
        $this->_cuestionarioFrp->actividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene()->pregunta11Valor();
    }
}