<?php
namespace src\dominios;
use Exception;
use src\dimensiones\{FaltaDeControlYAutonomiaSobreElTrabajo, LimitadaONulaPosibilidadDeDesarrollo,LimitadaOInexstenteCapacitacion};

class FaltaDeControlSobreElTrabajo
{
    private $_faltaDeControlYAutonomiaSobreElTrabajo;
    private $_limitadaONulaPosibilidadDeDesarrollo;
    private $_limitadaOInexstenteCapacitacion;
    private $_niveles = array(
        '0-5' => 'Nulo o despreciable',
        '5-8' => 'Bajo',
        '8-11' => 'Medio',
        '11-14' => 'Alto',
        '14-99' => 'Muy alto'
    );

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
        foreach ($this->_niveles as $k => $v)
        {
            $uno = explode('-',$k)[0];
            $dos = explode('-',$k)[1];
            if($this->faltaDeControlSobreElTrabajo() >= $uno && $this->faltaDeControlSobreElTrabajo() < $dos)
            {
                return $v;
            }
        }

        throw new Exception("Error para obtener riesgo cualitativo");
    }
}