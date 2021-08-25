<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 20, 21 y 22
*/
use src\CuestionarioFrp;

class FaltaDeControlYAutonomiaSobreElTrabajo
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function faltaDeControlYAutonomiaSobreElTrabajo(): int
    {
        return
        $this->_cuestionarioFrp->decisionesQuePuedeTomarEnSuTrabajo()->pregunta20Valor() +
        $this->_cuestionarioFrp->decisionesQuePuedeTomarEnSuTrabajo()->pregunta21Valor() +
        $this->_cuestionarioFrp->decisionesQuePuedeTomarEnSuTrabajo()->pregunta22Valor();
    }
}