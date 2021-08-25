<?php

namespace src;

use src\cuestionario\{
    CondicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo,
    ActividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene,
    TiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares,
    DecisionesQuePuedeTomarEnSuTrabajo,
    CapacitacionEInformacionQueRecibeSobreSuTrabajo,
    RelacionesConSusCompañerosDeTrabajoYSuJefe,
    AtencionAClientesYUsuarios,
    ActitudesDeLosTrabajadoresQueSupervisa
};

class CuestionarioFrp
{
    private $_condicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo;
    private $_actividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene;
    private $_tiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares;
    private $_decisionesQuePuedeTomarEnSuTrabajo;
    private $_capacitacionEInformacionQueRecibeSobreSuTrabajo;
    private $_relacionesConSusCompañerosDeTrabajoYSuJefe;
    private $_atencionAClientesYUsuarios;
    private $_actitudesDeLosTrabajadoresQueSupervisa;

    public function __construct
    (
        CondicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo $CondicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo,
        ActividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene $ActividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene,
        TiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares $TiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares,
        DecisionesQuePuedeTomarEnSuTrabajo $DecisionesQuePuedeTomarEnSuTrabajo,
        CapacitacionEInformacionQueRecibeSobreSuTrabajo $CapacitacionEInformacionQueRecibeSobreSuTrabajo,
        RelacionesConSusCompañerosDeTrabajoYSuJefe $RelacionesConSusCompañerosDeTrabajoYSuJefe,
        AtencionAClientesYUsuarios $AtencionAClientesYUsuarios,
        ActitudesDeLosTrabajadoresQueSupervisa $ActitudesDeLosTrabajadoresQueSupervisa
    )
    {
        $this->_condicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo = $CondicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo;
        $this->_actividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene = $ActividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene;
        $this->_tiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares = $TiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares;
        $this->_decisionesQuePuedeTomarEnSuTrabajo = $DecisionesQuePuedeTomarEnSuTrabajo;
        $this->_capacitacionEInformacionQueRecibeSobreSuTrabajo = $CapacitacionEInformacionQueRecibeSobreSuTrabajo;
        $this->_relacionesConSusCompañerosDeTrabajoYSuJefe = $RelacionesConSusCompañerosDeTrabajoYSuJefe;
        $this->_atencionAClientesYUsuarios = $AtencionAClientesYUsuarios;
        $this->_actitudesDeLosTrabajadoresQueSupervisa = $ActitudesDeLosTrabajadoresQueSupervisa;
    }

    public function condicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo(): CondicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo
    {
        return $this->_condicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo;
    }

    public function actividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene(): ActividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene
    {
        return $this->_actividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene;
    }

    public function tiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares(): TiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares
    {
        return $this->_tiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares;
    }

    public function decisionesQuePuedeTomarEnSuTrabajo(): DecisionesQuePuedeTomarEnSuTrabajo
    {
        return $this->_decisionesQuePuedeTomarEnSuTrabajo;
    }

    public function capacitacionEInformacionQueRecibeSobreSuTrabajo(): CapacitacionEInformacionQueRecibeSobreSuTrabajo
    {
        return $this->_capacitacionEInformacionQueRecibeSobreSuTrabajo;
    }

    public function relacionesConSusCompañerosDeTrabajoYSuJefe(): RelacionesConSusCompañerosDeTrabajoYSuJefe
    {
        return $this->_relacionesConSusCompañerosDeTrabajoYSuJefe;
    }

    public function atencionAClientesYUsuarios(): AtencionAClientesYUsuarios
    {
        return $this->_atencionAClientesYUsuarios;
    }

    public function actitudesDeLosTrabajadoresQueSupervisa(): ActitudesDeLosTrabajadoresQueSupervisa
    {
        return $this->_actitudesDeLosTrabajadoresQueSupervisa;
    }
}