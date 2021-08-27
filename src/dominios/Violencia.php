<?php
namespace src\dominios;

use Exception;
use src\dimensiones\ViolenciaLaboral;

class Violencia
{
    private $_violenciaLaboral;
    private $_niveles = array(
        '0-7' => 'Nulo o despreciable',
        '7-10' => 'Bajo',
        '10-13' => 'Medio',
        '13-16' => 'Alto',
        '16-99' => 'Muy alto'
    );

    public function __construct(ViolenciaLaboral $ViolenciaLaboral)
    {
        $this->_violenciaLaboral = $ViolenciaLaboral;
    }

    public function violencia(): int
    {
        return $this->violenciaLaboral()->violenciaLaboral();
    }

    public function violenciaLaboral(): ViolenciaLaboral
    {
        return $this->_violenciaLaboral;
    }

    public function obtenerRiesgosCualitativos(): string
    {
        foreach ($this->_niveles as $k => $v)
        {
            $uno = explode('-',$k)[0];
            $dos = explode('-',$k)[1];
            if($this->violencia() >= $uno && $this->violencia() < $dos)
            {
                return $v;
            }
        }

        throw new Exception("Error para obtener riesgo cualitativo");
    }
}