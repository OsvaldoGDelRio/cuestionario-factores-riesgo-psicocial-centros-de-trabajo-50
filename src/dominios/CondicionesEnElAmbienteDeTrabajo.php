<?php
namespace src\dominios;

use src\dimensiones\{CondicionesDeficientesEInsalubres,CondicionesPeligrosasEInseguras,TrabajosPeligrosos};

class CondicionesEnElAmbienteDeTrabajo
{
    private $_condicionesDeficientesEInsalubres;
    private $_condicionesPeligrosasEInseguras;
    private $_trabajosPeligrosos;

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
        $riesgo = '';
        
        if($this->condicionesEnElAmbienteDeTrabajo() < 3)
        {
            $riesgo = 'Nulo o despreciable';
        }

        if($this->condicionesEnElAmbienteDeTrabajo() >= 3 && $this->condicionesEnElAmbienteDeTrabajo() < 5)
        {
            $riesgo = 'Bajo';
        }

        if($this->condicionesEnElAmbienteDeTrabajo() >= 5 && $this->condicionesEnElAmbienteDeTrabajo() < 7)
        {
            $riesgo = 'Medio';
        }

        if($this->condicionesEnElAmbienteDeTrabajo() >= 7 && $this->condicionesEnElAmbienteDeTrabajo() < 9)
        {
            $riesgo = 'Alto';
        }

        if($this->condicionesEnElAmbienteDeTrabajo() >= 9)
        {
            $riesgo = 'Muy alto';
        }

        return $riesgo;
    }


}