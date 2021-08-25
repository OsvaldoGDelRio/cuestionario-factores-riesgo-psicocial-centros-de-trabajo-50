<?php
namespace src\categorias;

use src\dominios\{CargaDeTrabajo,FaltaDeControlSobreElTrabajo};

class FactoresPropiosDeLaActividad
{
    private $_cargaDeTrabajo;
    private $_faltaDeControlSobreElTrabajo;
    
    public function __construct
    (
        CargaDeTrabajo $CargaDeTrabajo,
        FaltaDeControlSobreElTrabajo $FaltaDeControlSobreElTrabajo    
    )
    {
        $this->_cargaDeTrabajo = $CargaDeTrabajo;
        $this->_faltaDeControlSobreElTrabajo = $FaltaDeControlSobreElTrabajo;
    }

    public function factoresPropiosDeLaActividad(): int
    {
        return 
        $this->cargaDeTrabajo()->cargaDeTrabajo() +
        $this->faltaDeControlSobreElTrabajo()->faltaDeControlSobreElTrabajo();
    }

    public function cargaDeTrabajo(): CargaDeTrabajo
    {
        return $this->_cargaDeTrabajo;
    }

    public function faltaDeControlSobreElTrabajo(): FaltaDeControlSobreElTrabajo
    {
        return $this->_faltaDeControlSobreElTrabajo;
    }

    public function obtenerRiesgosCualitativos(): string
    {
        $riesgo = '';
        
        if($this->factoresPropiosDeLaActividad() < 10)
        {
            $riesgo = 'Nulo o despreciable';
        }

        if($this->factoresPropiosDeLaActividad() >= 10 && $this->factoresPropiosDeLaActividad() < 20)
        {
            $riesgo = 'Bajo';
        }

        if($this->factoresPropiosDeLaActividad() >= 20 && $this->factoresPropiosDeLaActividad() < 30)
        {
            $riesgo = 'Medio';
        }

        if($this->factoresPropiosDeLaActividad() >= 30 && $this->factoresPropiosDeLaActividad() < 40)
        {
            $riesgo = 'Alto';
        }

        if($this->factoresPropiosDeLaActividad() >= 40)
        {
            $riesgo = 'Muy alto';
        }

        return $riesgo;
    }
}