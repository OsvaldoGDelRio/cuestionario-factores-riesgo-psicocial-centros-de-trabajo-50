<?php
namespace src\dominios;
use src\dimensiones\{InfluenciaDelTrabajoFueraDelCentroLaboral,InfluenciaDeLasResponsabilidadesFamiliares};

class InterferenciaEnLaRelacionTrabajoFamilia
{
    private $_influenciaDelTrabajoFueraDelCentroLaboral;
    private $_influenciaDeLasResponsabilidadesFamiliares;

    public function __construct
    (
        InfluenciaDelTrabajoFueraDelCentroLaboral $InfluenciaDelTrabajoFueraDelCentroLaboral,
        InfluenciaDeLasResponsabilidadesFamiliares $InfluenciaDeLasResponsabilidadesFamiliares
    )
    {
        $this->_influenciaDelTrabajoFueraDelCentroLaboral = $InfluenciaDelTrabajoFueraDelCentroLaboral;
        $this->_influenciaDeLasResponsabilidadesFamiliares = $InfluenciaDeLasResponsabilidadesFamiliares;
    }

    public function interferenciaEnLaRelacionTrabajoFamilia(): int
    {
        return 
        $this->influenciaDelTrabajoFueraDelCentroLaboral()->influenciaDelTrabajoFueraDelCentroLaboral() +
        $this->influenciaDeLasResponsabilidadesFamiliares()->influenciaDeLasResponsabilidadesFamiliares();
    }

    public function influenciaDelTrabajoFueraDelCentroLaboral(): InfluenciaDelTrabajoFueraDelCentroLaboral
    {
        return $this->_influenciaDelTrabajoFueraDelCentroLaboral;
    }

    public function influenciaDeLasResponsabilidadesFamiliares(): InfluenciaDeLasResponsabilidadesFamiliares
    {
        return $this->_influenciaDeLasResponsabilidadesFamiliares;
    }

    public function obtenerRiesgosCualitativos(): string
    {
        $riesgo = '';
        
        if($this->interferenciaEnLaRelacionTrabajoFamilia() < 1)
        {
            $riesgo = 'Nulo o despreciable';
        }

        if($this->interferenciaEnLaRelacionTrabajoFamilia() >= 1 && $this->interferenciaEnLaRelacionTrabajoFamilia() < 2)
        {
            $riesgo = 'Bajo';
        }

        if($this->interferenciaEnLaRelacionTrabajoFamilia() >= 2 && $this->interferenciaEnLaRelacionTrabajoFamilia() < 4)
        {
            $riesgo = 'Medio';
        }

        if($this->interferenciaEnLaRelacionTrabajoFamilia() >= 4 && $this->interferenciaEnLaRelacionTrabajoFamilia() < 6)
        {
            $riesgo = 'Alto';
        }

        if($this->interferenciaEnLaRelacionTrabajoFamilia() >= 6)
        {
            $riesgo = 'Muy alto';
        }

        return $riesgo;
    }
}