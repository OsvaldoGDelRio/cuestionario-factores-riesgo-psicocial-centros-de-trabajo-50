<?php
namespace src\dominios;

use Exception;

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
    private $_niveles = array(
        '0-12' => 'Nulo o despreciable',
        '12-16' => 'Bajo',
        '16-20' => 'Medio',
        '20-24' => 'Alto',
        '24-99' => 'Muy alto'
    );

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
        foreach ($this->_niveles as $k => $v)
        {
            $uno = explode('-',$k)[0];
            $dos = explode('-',$k)[1];
            if($this->cargaDeTrabajo() >= $uno && $this->cargaDeTrabajo() < $dos)
            {
                return $v;
            }
        }

        throw new Exception("Error para obtener riesgo cualitativo");
    }
}