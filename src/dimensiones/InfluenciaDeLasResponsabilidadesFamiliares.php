<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 17
*/
use src\CuestionarioFrp;

class InfluenciaDeLasResponsabilidadesFamiliares
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function influenciaDeLasResponsabilidadesFamiliares(): int
    {
        return
        $this->_cuestionarioFrp->tiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares()->pregunta17Valor();
    }
}