<?php
namespace src\dominios;

use Exception;
use src\dimensiones\JornadasDeTrabajoExtensas;

class JornadaDeTrabajo
{
    private $_jornadasDeTrabajoExtensas;
    private $_niveles = array(
        '0-1' => 'Nulo o despreciable',
        '1-2' => 'Bajo',
        '2-4' => 'Medio',
        '4-6' => 'Alto',
        '6-99' => 'Muy alto'
    );

    public function __construct(JornadasDeTrabajoExtensas $JornadasDeTrabajoExtensas)
    {
        $this->_jornadasDeTrabajoExtensas = $JornadasDeTrabajoExtensas;
    }

    public function jornadaDeTrabajo(): int
    {
        return
        $this->jornadasDeTrabajoExtensas()->jornadasDeTrabajoExtensas();
    }

    public function jornadasDeTrabajoExtensas(): JornadasDeTrabajoExtensas
    {
        return $this->_jornadasDeTrabajoExtensas;
    }

    public function obtenerRiesgosCualitativos(): string
    {
        foreach ($this->_niveles as $k => $v)
        {
            $uno = explode('-',$k)[0];
            $dos = explode('-',$k)[1];
            if($this->jornadaDeTrabajo() >= $uno && $this->jornadaDeTrabajo() < $dos)
            {
                return $v;
            }
        }

        throw new Exception("Error para obtener riesgo cualitativo");
    }
}