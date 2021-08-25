<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 1
*/
use src\CuestionarioFrp;

class CondicionesDeficientesEInsalubres
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function condicionesDeficientesEInsalubres(): int
    {
        return
        $this->_cuestionarioFrp->condicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo()->pregunta1Valor();
    }
}