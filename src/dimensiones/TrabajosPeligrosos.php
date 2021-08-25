<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 3
*/
use src\CuestionarioFrp;

class TrabajosPeligrosos
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function trabajosPeligrosos(): int
    {
        return
        $this->_cuestionarioFrp->condicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo()->pregunta3Valor();
    }
}