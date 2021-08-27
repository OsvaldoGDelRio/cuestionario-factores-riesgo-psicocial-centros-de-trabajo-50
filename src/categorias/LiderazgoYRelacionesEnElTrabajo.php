<?php
namespace src\categorias;

use Exception;
use src\dominios\{Liderazgo,RelacionesEnElTrabajo,Violencia};

class LiderazgoYRelacionesEnElTrabajo
{
    private $_liderazgo;
    private $_relacionesEnElTrabajo;
    private $_violencia;
    private $_niveles = array(
        '0-10' => 'Nulo o despreciable',
        '10-18' => 'Bajo',
        '18-28' => 'Medio',
        '28-38' => 'Alto',
        '38-99' => 'Muy alto'
    );

    public function __construct
    (
        Liderazgo $Liderazgo,
        RelacionesEnElTrabajo $RelacionesEnElTrabajo,
        Violencia $Violencia
    )
    {
        $this->_liderazgo = $Liderazgo;
        $this->_relacionesEnElTrabajo = $RelacionesEnElTrabajo;
        $this->_violencia = $Violencia;
    }

    public function liderazgoYRelacionesEnElTrabajo(): int
    {
        return 
        $this->liderazgo()->liderazgo() + 
        $this->relacionesEnElTrabajo()->relacionesEnElTrabajo() + 
        $this->violencia()->violencia();
    }

    public function liderazgo(): Liderazgo
    {
        return $this->_liderazgo;
    }

    public function relacionesEnElTrabajo(): RelacionesEnElTrabajo
    {
        return $this->_relacionesEnElTrabajo;
    }

    public function violencia(): Violencia
    {
        return $this->_violencia;
    }

    public function obtenerRiesgosCualitativos(): string
    {
        foreach ($this->_niveles as $k => $v)
        {
            $uno = explode('-',$k)[0];
            $dos = explode('-',$k)[1];
            if($this->liderazgoYRelacionesEnElTrabajo() >= $uno && $this->liderazgoYRelacionesEnElTrabajo() < $dos)
            {
                return $v;
            }
        }

        throw new Exception("Error para obtener riesgo cualitativo", 1);
    }
}