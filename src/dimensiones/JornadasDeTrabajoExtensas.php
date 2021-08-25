<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 14 y 15
*/
use src\CuestionarioFrp;

class JornadasDeTrabajoExtensas
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function jornadasDeTrabajoExtensas(): int
    {
        return
        $this->_cuestionarioFrp->tiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares()->pregunta14Valor() +
        $this->_cuestionarioFrp->tiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares()->pregunta15Valor();
    }
}