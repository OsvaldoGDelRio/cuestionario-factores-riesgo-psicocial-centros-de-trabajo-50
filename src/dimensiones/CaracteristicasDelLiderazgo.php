<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 28 y 29
*/
use src\CuestionarioFrp;

class CaracteristicasDelLiderazgo
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function caracteristicasDelLiderazgo(): int
    {
        return
        $this->_cuestionarioFrp->relacionesConSusCompañerosDeTrabajoYSuJefe()->pregunta28Valor() +
        $this->_cuestionarioFrp->relacionesConSusCompañerosDeTrabajoYSuJefe()->pregunta29Valor();
    }
}