<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 44, 45 y 46
*/
use src\CuestionarioFrp;

class DeficienteRelacionConLosColaboradoresQueSupervisa
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function deficienteRelacionConLosColaboradoresQueSupervisa(): int
    {
        return
        $this->_cuestionarioFrp->actitudesDeLosTrabajadoresQueSupervisa()->pregunta44Valor() +
        $this->_cuestionarioFrp->actitudesDeLosTrabajadoresQueSupervisa()->pregunta45Valor() +
        $this->_cuestionarioFrp->actitudesDeLosTrabajadoresQueSupervisa()->pregunta46Valor();
    }
}