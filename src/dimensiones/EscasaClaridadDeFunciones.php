<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 23, 24 y 25
*/
use src\CuestionarioFrp;

class EscasaClaridadDeFunciones
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function escasaClaridadDeFunciones(): int
    {
        return
        $this->_cuestionarioFrp->capacitacionEInformacionQueRecibeSobreSuTrabajo()->pregunta23Valor() +
        $this->_cuestionarioFrp->capacitacionEInformacionQueRecibeSobreSuTrabajo()->pregunta24Valor() +
        $this->_cuestionarioFrp->capacitacionEInformacionQueRecibeSobreSuTrabajo()->pregunta25Valor();
    }
}