<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 30, 31 y 32
*/
use src\CuestionarioFrp;

class RelacionesSocialesEnElTrabajo
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function relacionesSocialesEnElTrabajo(): int
    {
        return
        $this->_cuestionarioFrp->relacionesConSusCompañerosDeTrabajoYSuJefe()->pregunta30Valor() +
        $this->_cuestionarioFrp->relacionesConSusCompañerosDeTrabajoYSuJefe()->pregunta31Valor() +
        $this->_cuestionarioFrp->relacionesConSusCompañerosDeTrabajoYSuJefe()->pregunta32Valor();
    }
}