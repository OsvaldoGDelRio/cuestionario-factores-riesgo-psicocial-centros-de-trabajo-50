<?php
namespace src\dominios;

use src\dimensiones\{RelacionesSocialesEnElTrabajo,DeficienteRelacionConLosColaboradoresQueSupervisa};

class RelacionesEnElTrabajo
{
    private $_relacionesSocialesEnElTrabajo;
    private $_deficienteRelacionConLosColaboradoresQueSupervisa;

    public function __construct
    (
        RelacionesSocialesEnElTrabajo $RelacionesSocialesEnElTrabajo,
        DeficienteRelacionConLosColaboradoresQueSupervisa $DeficienteRelacionConLosColaboradoresQueSupervisa
    )
    {
        $this->_relacionesSocialesEnElTrabajo = $RelacionesSocialesEnElTrabajo;
        $this->_deficienteRelacionConLosColaboradoresQueSupervisa = $DeficienteRelacionConLosColaboradoresQueSupervisa;
    }

    public function relacionesEnElTrabajo(): int
    {
        return 
        $this->relacionesSocialesEnElTrabajo()->relacionesSocialesEnElTrabajo() + 
        $this->deficienteRelacionConLosColaboradoresQueSupervisa()->deficienteRelacionConLosColaboradoresQueSupervisa();
    }

    public function relacionesSocialesEnElTrabajo(): RelacionesSocialesEnElTrabajo
    {
        return $this->_relacionesSocialesEnElTrabajo;
    }

    public function deficienteRelacionConLosColaboradoresQueSupervisa(): DeficienteRelacionConLosColaboradoresQueSupervisa
    {
        return $this->_deficienteRelacionConLosColaboradoresQueSupervisa;
    }

    public function obtenerRiesgosCualitativos(): string
    {
        $riesgo = '';
        
        if($this->relacionesEnElTrabajo() < 5)
        {
            $riesgo = 'Nulo o despreciable';
        }

        if($this->relacionesEnElTrabajo() >= 5 && $this->relacionesEnElTrabajo() < 8)
        {
            $riesgo = 'Bajo';
        }

        if($this->relacionesEnElTrabajo() >= 8 && $this->relacionesEnElTrabajo() < 11)
        {
            $riesgo = 'Medio';
        }

        if($this->relacionesEnElTrabajo() >= 11 && $this->relacionesEnElTrabajo() < 14)
        {
            $riesgo = 'Alto';
        }

        if($this->relacionesEnElTrabajo() >= 14)
        {
            $riesgo = 'Muy alto';
        }

        return $riesgo;
    }
}