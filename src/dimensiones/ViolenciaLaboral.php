<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 33, 34, 35, 36,
37, 38, 39, 40
*/
use src\CuestionarioFrp;

class ViolenciaLaboral
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function ViolenciaLaboral(): int
    {
        return
        $this->_cuestionarioFrp->relacionesConSusCompañerosDeTrabajoYSuJefe()->pregunta33Valor() +
        $this->_cuestionarioFrp->relacionesConSusCompañerosDeTrabajoYSuJefe()->pregunta34Valor() +
        $this->_cuestionarioFrp->relacionesConSusCompañerosDeTrabajoYSuJefe()->pregunta35Valor() +
        $this->_cuestionarioFrp->relacionesConSusCompañerosDeTrabajoYSuJefe()->pregunta36Valor() +
        $this->_cuestionarioFrp->relacionesConSusCompañerosDeTrabajoYSuJefe()->pregunta37Valor() +
        $this->_cuestionarioFrp->relacionesConSusCompañerosDeTrabajoYSuJefe()->pregunta38Valor() +
        $this->_cuestionarioFrp->relacionesConSusCompañerosDeTrabajoYSuJefe()->pregunta39Valor() +
        $this->_cuestionarioFrp->relacionesConSusCompañerosDeTrabajoYSuJefe()->pregunta40Valor();
    }
}