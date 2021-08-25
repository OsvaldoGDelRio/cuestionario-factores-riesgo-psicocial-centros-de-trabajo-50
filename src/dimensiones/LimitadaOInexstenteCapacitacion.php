<?php
namespace src\dimensiones;
/*
Devuelve los valores de las preguntas 26 y 27
*/
use src\CuestionarioFrp;

class LimitadaOInexstenteCapacitacion
{
    private $_cuestionarioFrp;

    public function __construct(CuestionarioFrp $CuestionarioFrp)
    {
        $this->_cuestionarioFrp = $CuestionarioFrp;
    }

    public function limitadaOInexstenteCapacitacion(): int
    {
        return
        $this->_cuestionarioFrp->capacitacionEInformacionQueRecibeSobreSuTrabajo()->pregunta26Valor() +
        $this->_cuestionarioFrp->capacitacionEInformacionQueRecibeSobreSuTrabajo()->pregunta27Valor();
    }
}