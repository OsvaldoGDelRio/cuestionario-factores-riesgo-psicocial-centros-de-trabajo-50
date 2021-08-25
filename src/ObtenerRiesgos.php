<?php
namespace src;

use src\categorias\{
    AmbienteDeTrabajo,
    FactoresPropiosDeLaActividad,
    LiderazgoYRelacionesEnElTrabajo,
    OrganizacionDelTiempoDelTrabajo
};

class ObtenerRiesgos
{
    private $_ambienteDeTrabajo;
    private $_factoresPropiosDeLaActividad;
    private $_liderazgoYRelacionesEnElTrabajo;
    private $_organizacionDelTiempoDelTrabajo;

    public function __construct
    (
        AmbienteDeTrabajo $AmbienteDeTrabajo,
        FactoresPropiosDeLaActividad $FactoresPropiosDeLaActividad,
        LiderazgoYRelacionesEnElTrabajo $LiderazgoYRelacionesEnElTrabajo,
        OrganizacionDelTiempoDelTrabajo $OrganizacionDelTiempoDelTrabajo
    )
    {
        $this->_ambienteDeTrabajo = $AmbienteDeTrabajo;
        $this->_factoresPropiosDeLaActividad = $FactoresPropiosDeLaActividad;
        $this->_liderazgoYRelacionesEnElTrabajo = $LiderazgoYRelacionesEnElTrabajo;
        $this->_organizacionDelTiempoDelTrabajo = $OrganizacionDelTiempoDelTrabajo;
    }

    public function obtenerRiesgos(): int
    {
        return 
        $this->ambienteDeTrabajo()->ambienteDeTrabajo() + 
        $this->factoresPropiosDeLaActividad()->factoresPropiosDeLaActividad() + 
        $this->liderazgoYRelacionesEnElTrabajo()->liderazgoYRelacionesEnElTrabajo() + 
        $this->organizacionDelTiempoDelTrabajo()->organizacionDelTiempoDelTrabajo();
    }

    public function obtenerRiesgosCualitativos(): string
    {
        $riesgo = '';
        
        if($this->obtenerRiesgos() < 20)
        {
            $riesgo = 'Nulo o despreciable';
        }

        if($this->obtenerRiesgos() >= 20 && $this->obtenerRiesgos() < 45)
        {
            $riesgo = 'Bajo';
        }

        if($this->obtenerRiesgos() >= 45 && $this->obtenerRiesgos() < 70)
        {
            $riesgo = 'Medio';
        }

        if($this->obtenerRiesgos() >= 70 && $this->obtenerRiesgos() < 90)
        {
            $riesgo = 'Alto';
        }

        if($this->obtenerRiesgos() >= 90)
        {
            $riesgo = 'Muy alto';
        }

        return $riesgo;
    }

    public function organizacionDelTiempoDelTrabajo(): OrganizacionDelTiempoDelTrabajo
    {
        return $this->_organizacionDelTiempoDelTrabajo;
    }

    public function liderazgoYRelacionesEnElTrabajo(): LiderazgoYRelacionesEnElTrabajo
    {
        return $this->_liderazgoYRelacionesEnElTrabajo;
    }

    public function factoresPropiosDeLaActividad(): FactoresPropiosDeLaActividad
    {
        return $this->_factoresPropiosDeLaActividad;
    }

    public function ambienteDeTrabajo(): AmbienteDeTrabajo
    {
        return $this->_ambienteDeTrabajo;
    }
        
}