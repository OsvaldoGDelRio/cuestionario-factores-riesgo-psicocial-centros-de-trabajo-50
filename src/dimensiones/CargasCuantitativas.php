<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 4 y 9
*/
use src\CuestionarioFrp;

class CargasCuantitativas
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function cargasCuantitativas(): int
    {
        return
        $this->_cuestionarioFrp->condicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo()->pregunta4Valor() +
        $this->_cuestionarioFrp->condicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo()->pregunta9Valor();
    }
}