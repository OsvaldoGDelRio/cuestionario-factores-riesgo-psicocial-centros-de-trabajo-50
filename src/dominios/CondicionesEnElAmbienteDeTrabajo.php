<?php
namespace src\dominios;

use Exception;
use src\dimensiones\{CondicionesDeficientesEInsalubres,CondicionesPeligrosasEInseguras,TrabajosPeligrosos};

class CondicionesEnElAmbienteDeTrabajo
{
    private $_condicionesDeficientesEInsalubres;
    private $_condicionesPeligrosasEInseguras;
    private $_trabajosPeligrosos;
    private $_niveles = array(
        '0-3' => 'Nulo o despreciable',
        '3-5' => 'Bajo',
        '5-7' => 'Medio',
        '7-9' => 'Alto',
        '9-99' => 'Muy alto'
    );

    public function __construct
    (
        CondicionesDeficientesEInsalubres $CondicionesDeficientesEInsalubres,
        CondicionesPeligrosasEInseguras $CondicionesPeligrosasEInseguras,
        TrabajosPeligrosos $TrabajosPeligrosos
    )
    {
        $this->_condicionesDeficientesEInsalubres = $CondicionesDeficientesEInsalubres;
        $this->_condicionesPeligrosasEInseguras = $CondicionesPeligrosasEInseguras;
        $this->_trabajosPeligrosos = $TrabajosPeligrosos;
    }

    public function condicionesEnElAmbienteDeTrabajo(): int
    {
        return 
        $this->condicionesDeficientesEInsalubres()->condicionesDeficientesEInsalubres() +
        $this->condicionesPeligrosasEInseguras()->condicionesPeligrosasEInseguras() + 
        $this->trabajosPeligrosos()->trabajosPeligrosos();
    }

    public function condicionesDeficientesEInsalubres(): CondicionesDeficientesEInsalubres
    {
        return $this->_condicionesDeficientesEInsalubres;
    }

    public function condicionesPeligrosasEInseguras(): CondicionesPeligrosasEInseguras
    {
        return $this->_condicionesPeligrosasEInseguras;
    }

    public function trabajosPeligrosos(): TrabajosPeligrosos
    {
        return $this->_trabajosPeligrosos;
    }

    public function obtenerRiesgosCualitativos(): string
    {
        foreach ($this->_niveles as $k => $v)
        {
            $uno = explode('-',$k)[0];
            $dos = explode('-',$k)[1];
            if($this->condicionesEnElAmbienteDeTrabajo() >= $uno && $this->condicionesEnElAmbienteDeTrabajo() < $dos)
            {
                return $v;
            }
        }

        throw new Exception("Error para obtener riesgo cualitativo");
    }


}