<?php
namespace src;
use src\FactoryClassInterface;
use src\ObtenerRiesgos;
use src\categorias\{
    AmbienteDeTrabajo,
    FactoresPropiosDeLaActividad,
    LiderazgoYRelacionesEnElTrabajo,
    OrganizacionDelTiempoDelTrabajo
};
use src\dominios\{
    CargaDeTrabajo,
    CondicionesEnElAmbienteDeTrabajo,
    FaltaDeControlSobreElTrabajo,
    InterferenciaEnLaRelacionTrabajoFamilia,
    JornadaDeTrabajo,
    Liderazgo,
    RelacionesEnElTrabajo,
    Violencia
};
use src\dimensiones\{
    CaracteristicasDelLiderazgo,
    CargaMental,
    CargasContradictoriasOInconsistentes,
    CargasCuantitativas,
    CargasDeAltaResponsabilidad,
    CargasPsicologicasEmocionales,
    CondicionesDeficientesEInsalubres,
    CondicionesPeligrosasEInseguras,
    DeficienteRelacionConLosColaboradoresQueSupervisa,
    EscasaClaridadDeFunciones,
    FaltaDeControlYAutonomiaSobreElTrabajo,
    InfluenciaDeLasResponsabilidadesFamiliares,
    InfluenciaDelTrabajoFueraDelCentroLaboral,
    JornadasDeTrabajoExtensas,
    LimitadaOInexstenteCapacitacion,
    LimitadaONulaPosibilidadDeDesarrollo,
    RelacionesSocialesEnElTrabajo,
    RitmoDeTrabajoAcelerado,
    TrabajosPeligrosos,
    ViolenciaLaboral
};

class CrearObtenerRiesgos implements FactoryClassInterface
{
    public function crear(array $array): ObtenerRiesgos
    {
        $cuestionario = $array['cuestionarioFrp'];

        return new ObtenerRiesgos(
            new AmbienteDeTrabajo(
                new CondicionesEnElAmbienteDeTrabajo(
                    new CondicionesDeficientesEInsalubres($cuestionario),
                    new CondicionesPeligrosasEInseguras($cuestionario),
                    new TrabajosPeligrosos($cuestionario)
                )
            ),
            new FactoresPropiosDeLaActividad(
                new CargaDeTrabajo(
                    new CargasCuantitativas($cuestionario),
                    new RitmoDeTrabajoAcelerado($cuestionario),
                    new CargaMental($cuestionario),
                    new CargasPsicologicasEmocionales($cuestionario),
                    new CargasDeAltaResponsabilidad($cuestionario),
                    new CargasContradictoriasOInconsistentes($cuestionario)
                ),
                new FaltaDeControlSobreElTrabajo(
                    new FaltaDeControlYAutonomiaSobreElTrabajo($cuestionario),
                    new LimitadaONulaPosibilidadDeDesarrollo($cuestionario),
                    new LimitadaOInexstenteCapacitacion($cuestionario)
                )
            ),
            new LiderazgoYRelacionesEnElTrabajo(
                new Liderazgo(
                    new EscasaClaridadDeFunciones($cuestionario),
                    new CaracteristicasDelLiderazgo($cuestionario)
                ),
                new RelacionesEnElTrabajo(
                    new RelacionesSocialesEnElTrabajo($cuestionario),
                    new DeficienteRelacionConLosColaboradoresQueSupervisa($cuestionario)
                ),
                new Violencia(
                    new ViolenciaLaboral($cuestionario)
                )
            ),
            new OrganizacionDelTiempoDelTrabajo(
                new JornadaDeTrabajo(
                    new JornadasDeTrabajoExtensas($cuestionario)
                ),
                new InterferenciaEnLaRelacionTrabajoFamilia(
                    new InfluenciaDelTrabajoFueraDelCentroLaboral($cuestionario),
                    new InfluenciaDeLasResponsabilidadesFamiliares($cuestionario)
                )
            )
        );
    }
}