<?php
namespace src\dominios;

use Exception;
use src\dimensiones\{EscasaClaridadDeFunciones,CaracteristicasDelLiderazgo};

class Liderazgo
{
    private $_escasaClaridadDeFunciones;
    private $_caracteristicasDelLiderazgo;
    private $_niveles = array(
        '0-3' => 'Nulo o despreciable',
        '3-5' => 'Bajo',
        '5-8' => 'Medio',
        '8-11' => 'Alto',
        '11-99' => 'Muy alto'
    );

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
        foreach ($this->_niveles as $k => $v)
        {
            $uno = explode('-',$k)[0];
            $dos = explode('-',$k)[1];
            if($this->liderazgo() >= $uno && $this->liderazgo() < $dos)
            {
                return $v;
            }
        }

        throw new Exception("Error para obtener riesgo cualitativo");
    }
}