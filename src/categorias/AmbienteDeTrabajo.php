<?php
namespace src\categorias;

use Exception;
use src\dominios\CondicionesEnElAmbienteDeTrabajo;

class AmbienteDeTrabajo
{
    private $_condicionesEnElAmbienteDeTrabajo;
    private $_niveles = array(
        '0-3' => 'Nulo o despreciable',
        '3-5' => 'Bajo',
        '5-7' => 'Medio',
        '7-9' => 'Alto',
        '9-99' => 'Muy alto'
    );

    public function __construct(CondicionesEnElAmbienteDeTrabajo $CondicionesEnElAmbienteDeTrabajo)
    {
        $this->_condicionesEnElAmbienteDeTrabajo = $CondicionesEnElAmbienteDeTrabajo;
    }

    public function ambienteDeTrabajo(): int
    {
        return $this->condicionesEnElAmbienteDeTrabajo()->condicionesEnElAmbienteDeTrabajo();
    }

    public function condicionesEnElAmbienteDeTrabajo(): CondicionesEnElAmbienteDeTrabajo
    {
        return $this->_condicionesEnElAmbienteDeTrabajo;
    }

    public function obtenerRiesgosCualitativos(): string
    {
        foreach ($this->_niveles as $k => $v)
        {
            $uno = explode('-',$k)[0];
            $dos = explode('-',$k)[1];
            if($this->ambienteDeTrabajo() >= $uno && $this->ambienteDeTrabajo() < $dos)
            {
                return $v;
            }
        }

        throw new Exception("Error para obtener riesgo cualitativo", 1);
        
    }
}