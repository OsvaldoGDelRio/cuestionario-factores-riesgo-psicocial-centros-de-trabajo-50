<?php
namespace src\dominios;
use src\dimensiones\{FaltaDeControlYAutonomiaSobreElTrabajo, LimitadaONulaPosibilidadDeDesarrollo,LimitadaOInexstenteCapacitacion};

class FaltaDeControlSobreElTrabajo
{
    private $_faltaDeControlYAutonomiaSobreElTrabajo;
    private $_limitadaONulaPosibilidadDeDesarrollo;
    private $_limitadaOInexstenteCapacitacion;

    public function __construct
    (
        FaltaDeControlYAutonomiaSobreElTrabajo $FaltaDeControlYAutonomiaSobreElTrabajo,
        LimitadaONulaPosibilidadDeDesarrollo $LimitadaONulaPosibilidadDeDesarrollo,
        LimitadaOInexstenteCapacitacion $LimitadaOInexstenteCapacitacion
    )
    {
        $this->_faltaDeControlYAutonomiaSobreElTrabajo = $FaltaDeControlYAutonomiaSobreElTrabajo;
        $this->_limitadaONulaPosibilidadDeDesarrollo = $LimitadaONulaPosibilidadDeDesarrollo;
        $this->_limitadaOInexstenteCapacitacion = $LimitadaOInexstenteCapacitacion;
    }

    public function faltaDeControlSobreElTrabajo(): int
    {
        return 
        $this->faltaDeControlYAutonomiaSobreElTrabajo()->faltaDeControlYAutonomiaSobreElTrabajo() +
        $this->limitadaONulaPosibilidadDeDesarrollo()->limitadaONulaPosibilidadDeDesarrollo() + 
        $this->limitadaOInexstenteCapacitacion()->limitadaOInexstenteCapacitacion();
    }

    public function faltaDeControlYAutonomiaSobreElTrabajo(): FaltaDeControlYAutonomiaSobreElTrabajo
    {
        return $this->_faltaDeControlYAutonomiaSobreElTrabajo;
    }

    public function limitadaONulaPosibilidadDeDesarrollo(): LimitadaONulaPosibilidadDeDesarrollo
    {
        return $this->_limitadaONulaPosibilidadDeDesarrollo;
    }

    public function limitadaOInexstenteCapacitacion(): LimitadaOInexstenteCapacitacion
    {
        return $this->_limitadaOInexstenteCapacitacion;
    }

    public function obtenerRiesgosCualitativos(): string
    {
        $riesgo = '';
        
        if($this->faltaDeControlSobreElTrabajo() < 5)
        {
            $riesgo = 'Nulo o despreciable';
        }

        if($this->faltaDeControlSobreElTrabajo() >= 5 && $this->faltaDeControlSobreElTrabajo() < 8)
        {
            $riesgo = 'Bajo';
        }

        if($this->faltaDeControlSobreElTrabajo() >= 8 && $this->faltaDeControlSobreElTrabajo() < 11)
        {
            $riesgo = 'Medio';
        }

        if($this->faltaDeControlSobreElTrabajo() >= 11 && $this->faltaDeControlSobreElTrabajo() < 14)
        {
            $riesgo = 'Alto';
        }

        if($this->faltaDeControlSobreElTrabajo() >= 14)
        {
            $riesgo = 'Muy alto';
        }

        return $riesgo;
    }
}