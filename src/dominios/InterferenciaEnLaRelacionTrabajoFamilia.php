<?php
namespace src\dominios;
use Exception;
use src\dimensiones\{InfluenciaDelTrabajoFueraDelCentroLaboral,InfluenciaDeLasResponsabilidadesFamiliares};

class InterferenciaEnLaRelacionTrabajoFamilia
{
    private $_influenciaDelTrabajoFueraDelCentroLaboral;
    private $_influenciaDeLasResponsabilidadesFamiliares;
    private $_niveles = array(
        '0-1' => 'Nulo o despreciable',
        '1-2' => 'Bajo',
        '2-4' => 'Medio',
        '4-6' => 'Alto',
        '6-99' => 'Muy alto'
    );

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
        foreach ($this->_niveles as $k => $v)
        {
            $uno = explode('-',$k)[0];
            $dos = explode('-',$k)[1];
            if($this->interferenciaEnLaRelacionTrabajoFamilia() >= $uno && $this->interferenciaEnLaRelacionTrabajoFamilia() < $dos)
            {
                return $v;
            }
        }

        throw new Exception("Error para obtener riesgo cualitativo");
    }
}