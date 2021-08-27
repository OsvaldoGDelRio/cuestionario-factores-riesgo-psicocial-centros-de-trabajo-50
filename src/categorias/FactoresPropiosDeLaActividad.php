<?php
namespace src\categorias;

use Exception;
use src\dominios\{CargaDeTrabajo,FaltaDeControlSobreElTrabajo};

class FactoresPropiosDeLaActividad
{
    private $_cargaDeTrabajo;
    private $_faltaDeControlSobreElTrabajo;
    private $_niveles = array(
        '0-10' => 'Nulo o despreciable',
        '10-20' => 'Bajo',
        '20-30' => 'Medio',
        '30-40' => 'Alto',
        '40-99' => 'Muy alto'
    );
    
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
        foreach ($this->_niveles as $k => $v)
        {
            $uno = explode('-',$k)[0];
            $dos = explode('-',$k)[1];
            if($this->factoresPropiosDeLaActividad() >= $uno && $this->factoresPropiosDeLaActividad() < $dos)
            {
                return $v;
            }
        }

        throw new Exception("Error para obtener riesgo cualitativo", 1);
    }
}