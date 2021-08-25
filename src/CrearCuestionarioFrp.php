<?php
namespace src;
use src\cuestionario\{
    ActitudesDeLosTrabajadoresQueSupervisa,
    ActividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene,
    AtencionAClientesYUsuarios,
    CapacitacionEInformacionQueRecibeSobreSuTrabajo,
    CondicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo,
    DecisionesQuePuedeTomarEnSuTrabajo,
    RelacionesConSusCompañerosDeTrabajoYSuJefe,
    TiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares
};
use src\FactoryClassInterface;
use src\CuestionarioFrp;

class CrearCuestionarioFrp implements FactoryClassInterface
{
    public function crear(array $array): CuestionarioFrp
    {
        return new CuestionarioFrp
        (
            new CondicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo(
                $array['pregunta1'],
                $array['pregunta2'],
                $array['pregunta3'],
                $array['pregunta4'],
                $array['pregunta5'],
                $array['pregunta6'],
                $array['pregunta7'],
                $array['pregunta8'],
                $array['pregunta9']
            ),
            new ActividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene(
                $array['pregunta10'],
                $array['pregunta11'],
                $array['pregunta12'],
                $array['pregunta13']
            ),
            new TiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares(
                $array['pregunta14'],
                $array['pregunta15'],
                $array['pregunta16'],
                $array['pregunta17']
            ),
            new DecisionesQuePuedeTomarEnSuTrabajo(
                $array['pregunta18'],
                $array['pregunta19'],
                $array['pregunta20'],
                $array['pregunta21'],
                $array['pregunta22']
            ),
            new CapacitacionEInformacionQueRecibeSobreSuTrabajo(
                $array['pregunta23'],
                $array['pregunta24'],
                $array['pregunta25'],
                $array['pregunta26'],
                $array['pregunta27']
            ),
            new RelacionesConSusCompañerosDeTrabajoYSuJefe(
                $array['pregunta28'],
                $array['pregunta29'],
                $array['pregunta30'],
                $array['pregunta31'],
                $array['pregunta32'],
                $array['pregunta33'],
                $array['pregunta34'],
                $array['pregunta35'],
                $array['pregunta36'],
                $array['pregunta37'],
                $array['pregunta38'],
                $array['pregunta39'],
                $array['pregunta40']
            ),
            new AtencionAClientesYUsuarios(
                $array['atiendeClientes'],
                $array['pregunta41'],
                $array['pregunta42'],
                $array['pregunta43']
            ),
            new ActitudesDeLosTrabajadoresQueSupervisa(
                $array['esJefe'],
                $array['pregunta44'],
                $array['pregunta45'],
                $array['pregunta46']
            )
        );
    }
}