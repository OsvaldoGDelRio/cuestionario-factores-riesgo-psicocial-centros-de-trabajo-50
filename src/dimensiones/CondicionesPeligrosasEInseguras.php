<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 2
*/
use src\CuestionarioFrp;

class CondicionesPeligrosasEInseguras
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function condicionesPeligrosasEInseguras(): int
    {
        return
        $this->_cuestionarioFrp->condicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo()->pregunta2Valor();
    }
}