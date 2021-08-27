<?php
namespace src;

use Exception;

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
    private $_niveles = array(
        '0-20' => 'Nulo o despreciable',
        '20-45' => 'Bajo',
        '45-70' => 'Medio',
        '70-90' => 'Alto',
        '90-99' => 'Muy alto'
    );

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
        foreach ($this->_niveles as $k => $v)
        {
            $uno = explode('-',$k)[0];
            $dos = explode('-',$k)[1];
            if($this->obtenerRiesgos() >= $uno && $this->obtenerRiesgos() < $dos)
            {
                return $v;
            }
        }

        throw new Exception("Error para obtener riesgo cualitativo", 1);
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