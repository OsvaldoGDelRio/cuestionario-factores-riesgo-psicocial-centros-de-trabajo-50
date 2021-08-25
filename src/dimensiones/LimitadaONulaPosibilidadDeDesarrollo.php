<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 18 y 19
*/
use src\CuestionarioFrp;

class LimitadaONulaPosibilidadDeDesarrollo
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function limitadaONulaPosibilidadDeDesarrollo(): int
    {
        return
        $this->_cuestionarioFrp->decisionesQuePuedeTomarEnSuTrabajo()->pregunta18Valor() +
        $this->_cuestionarioFrp->decisionesQuePuedeTomarEnSuTrabajo()->pregunta19Valor();
    }
}