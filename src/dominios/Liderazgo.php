<?php
namespace src\dominios;

use src\dimensiones\{EscasaClaridadDeFunciones,CaracteristicasDelLiderazgo};

class Liderazgo
{
    private $_escasaClaridadDeFunciones;
    private $_caracteristicasDelLiderazgo;

    public function __construct
    (
        EscasaClaridadDeFunciones $EscasaClaridadDeFunciones,
        CaracteristicasDelLiderazgo $CaracteristicasDelLiderazgo
    )
    {
        $this->_escasaClaridadDeFunciones = $EscasaClaridadDeFunciones;
        $this->_caracteristicasDelLiderazgo = $CaracteristicasDelLiderazgo;
    }

    public function liderazgo(): int
    {
        return 
        $this->escasaClaridadDeFunciones()->escasaClaridadDeFunciones() +
        $this->caracteristicasDelLiderazgo()->caracteristicasDelLiderazgo();
    }

    public function escasaClaridadDeFunciones(): EscasaClaridadDeFunciones
    {
        return $this->_escasaClaridadDeFunciones;
    }

    public function caracteristicasDelLiderazgo(): CaracteristicasDelLiderazgo
    {
        return $this->_caracteristicasDelLiderazgo;
    }

    public function obtenerRiesgosCualitativos(): string
    {
        $riesgo = '';
        
        if($this->liderazgo() < 3)
        {
            $riesgo = 'Nulo o despreciable';
        }

        if($this->liderazgo() >= 3 && $this->liderazgo() < 5)
        {
            $riesgo = 'Bajo';
        }

        if($this->liderazgo() >= 5 && $this->liderazgo() < 8)
        {
            $riesgo = 'Medio';
        }

        if($this->liderazgo() >= 8 && $this->liderazgo() < 11)
        {
            $riesgo = 'Alto';
        }

        if($this->liderazgo() >= 11)
        {
            $riesgo = 'Muy alto';
        }

        return $riesgo;
    }
}