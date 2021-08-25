<?php
namespace src\dominios;

use src\dimensiones\{
    CargasCuantitativas,
    RitmoDeTrabajoAcelerado,
    CargaMental,
    CargasPsicologicasEmocionales,
    CargasDeAltaResponsabilidad,
    CargasContradictoriasOInconsistentes
};

class CargaDeTrabajo
{
    private $_cargasCuantitativas;
    private $_ritmoDeTrabajoAcelerado;
    private $_cargaMental;
    private $_cargasPsicologicasEmocionales;
    private $_cargasDeAltaResponsabilidad;
    private $_cargasContradictoriasOIncosistentes;

    public function __construct
    (
        CargasCuantitativas $CargasCuantitativas,
        RitmoDeTrabajoAcelerado $RitmoDeTrabajoAcelerado,
        CargaMental $CargaMental,
        CargasPsicologicasEmocionales $CargasPsicologicasEmocionales,
        CargasDeAltaResponsabilidad $CargasDeAltaResponsabilidad,
        CargasContradictoriasOInconsistentes $CargasContradictoriasOIncosistentes
    )
    {
        $this->_cargasCuantitativas = $CargasCuantitativas;
        $this->_ritmoDeTrabajoAcelerado = $RitmoDeTrabajoAcelerado;
        $this->_cargaMental = $CargaMental;
        $this->_cargasPsicologicasEmocionales = $CargasPsicologicasEmocionales;
        $this->_cargasDeAltaResponsabilidad = $CargasDeAltaResponsabilidad;
        $this->_cargasContradictoriasOIncosistentes = $CargasContradictoriasOIncosistentes;
    }

    public function cargaDeTrabajo(): int
    {
        return
        $this->cargasCuantitativas()->cargasCuantitativas() + 
        $this->ritmoDeTrabajoAcelerado()->ritmoDeTrabajoAcelerado() + 
        $this->cargaMental()->cargaMental() + 
        $this->cargasPsicologicasEmocionales()->cargasPsicologicasEmocionales() + 
        $this->cargasDeAltaResponsabilidad()->cargasDeAltaResponsabilidad() + 
        $this->cargasContradictoriasOIncosistentes()->cargasContradictoriasOInconsistentes();
    }

    public function cargasCuantitativas(): CargasCuantitativas
    {
        return $this->_cargasCuantitativas;
    }

    public function ritmoDeTrabajoAcelerado(): RitmoDeTrabajoAcelerado
    {
        return $this->_ritmoDeTrabajoAcelerado;
    }

    public function cargaMental(): CargaMental
    {
        return $this->_cargaMental;
    }

    public function cargasPsicologicasEmocionales(): CargasPsicologicasEmocionales
    {
        return $this->_cargasPsicologicasEmocionales;
    }

    public function cargasDeAltaResponsabilidad(): CargasDeAltaResponsabilidad
    {
        return $this->_cargasDeAltaResponsabilidad;
    }

    public function cargasContradictoriasOIncosistentes(): CargasContradictoriasOInconsistentes
    {
        return $this->_cargasContradictoriasOIncosistentes;
    }

    public function obtenerRiesgosCualitativos(): string
    {
        $riesgo = '';
        
        if($this->cargaDeTrabajo() < 12)
        {
            $riesgo = 'Nulo o despreciable';
        }

        if($this->cargaDeTrabajo() >= 12 && $this->cargaDeTrabajo() < 16)
        {
            $riesgo = 'Bajo';
        }

        if($this->cargaDeTrabajo() >= 16 && $this->cargaDeTrabajo() < 20)
        {
            $riesgo = 'Medio';
        }

        if($this->cargaDeTrabajo() >= 20 && $this->cargaDeTrabajo() < 24)
        {
            $riesgo = 'Alto';
        }

        if($this->cargaDeTrabajo() >= 24)
        {
            $riesgo = 'Muy alto';
        }

        return $riesgo;
    }
}