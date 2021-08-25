<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 41, 42 y 43
*/
use src\CuestionarioFrp;

class CargasPsicologicasEmocionales
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function cargasPsicologicasEmocionales(): int
    {
        return
        $this->_cuestionarioFrp->atencionAClientesYUsuarios()->pregunta41Valor() +
        $this->_cuestionarioFrp->atencionAClientesYUsuarios()->pregunta42Valor() +
        $this->_cuestionarioFrp->atencionAClientesYUsuarios()->pregunta43Valor();
    }
}