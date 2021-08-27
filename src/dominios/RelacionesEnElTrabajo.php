<?php
namespace src\dominios;

use Exception;
use src\dimensiones\{RelacionesSocialesEnElTrabajo,DeficienteRelacionConLosColaboradoresQueSupervisa};

class RelacionesEnElTrabajo
{
    private $_relacionesSocialesEnElTrabajo;
    private $_deficienteRelacionConLosColaboradoresQueSupervisa;
    private $_niveles = array(
        '0-5' => 'Nulo o despreciable',
        '5-8' => 'Bajo',
        '8-11' => 'Medio',
        '11-14' => 'Alto',
        '14-99' => 'Muy alto'
    );

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
        foreach ($this->_niveles as $k => $v)
        {
            $uno = explode('-',$k)[0];
            $dos = explode('-',$k)[1];
            if($this->relacionesEnElTrabajo() >= $uno && $this->relacionesEnElTrabajo() < $dos)
            {
                return $v;
            }
        }

        throw new Exception("Error para obtener riesgo cualitativo");
    }
}