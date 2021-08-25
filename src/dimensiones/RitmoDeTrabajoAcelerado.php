<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 5 y 6
*/
use src\CuestionarioFrp;

class RitmoDeTrabajoAcelerado
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function ritmoDeTrabajoAcelerado(): int
    {
        return
        $this->_cuestionarioFrp->condicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo()->pregunta5Valor() +
        $this->_cuestionarioFrp->condicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo()->pregunta6Valor();
    }
}