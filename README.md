[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/OsvaldoGDelRio/cuestionario-factores-riesgo-psicocial-centros-de-trabajo-50-nom035-stps/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/cuestionario-factores-riesgo-psicocial-centros-de-trabajo-50-nom035-stps/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/OsvaldoGDelRio/cuestionario-factores-riesgo-psicocial-centros-de-trabajo-50-nom035-stps/badges/build.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/cuestionario-factores-riesgo-psicocial-centros-de-trabajo-50-nom035-stps/build-status/main)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/OsvaldoGDelRio/cuestionario-factores-riesgo-psicocial-centros-de-trabajo-50-nom035-stps/badges/code-intelligence.svg?b=main)](https://scrutinizer-ci.com/code-intelligence)
# cuestionario-factores-riesgo-psicocial-centros-de-trabajo-50
Clase en PHP para el cuestionario FACTORES DE RIESGO PSICOSOCIAL EN LOS CENTROS DE TRABAJO de hasta 50 trabajadores

## composer

```shell
composer require osvaldogdelrio/cuestionario-factores-riesgo-psicocial-centros-de-trabajo-50-nom035-stps
```

```php
<?php
/*
Ejemplos de uso
*/

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use src\CuestionarioFrp;
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

use src\{CrearCuestionarioFrp,CrearObtenerRiesgos,CambiarValoresParaBaseDeDatosCuestionarioFrp};

$cuestionario = new CuestionarioFrp(
    new CondicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo('Nunca','Nunca','Nunca','Nunca','Nunca','Nunca','Nunca','Nunca','Nunca'),
    new ActividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene('Nunca','Nunca','Nunca','Nunca'),
    new TiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares('Nunca','Nunca','Nunca','Nunca'),
    new DecisionesQuePuedeTomarEnSuTrabajo('Nunca','Nunca','Nunca','Nunca','Nunca'),
    new CapacitacionEInformacionQueRecibeSobreSuTrabajo('Nunca','Nunca','Nunca','Nunca','Nunca'),
    new RelacionesConSusCompañerosDeTrabajoYSuJefe('Nunca','Nunca','Nunca','Nunca','Nunca','Nunca','Nunca','Nunca','Nunca','Nunca','Nunca','Nunca','Nunca'),
    new AtencionAClientesYUsuarios('No','Nunca','Nunca','Nunca'),
    new ActitudesDeLosTrabajadoresQueSupervisa('No','Nunca','Nunca','Nunca')
);

/*
Crear cuestionario desde array
*/
$datos = array(
'pregunta1' => 'Nunca',
'pregunta2' => 'Nunca',
'pregunta3' => 'Nunca',
'pregunta4' => 'Nunca',
'pregunta5' => 'Nunca',
'pregunta6' => 'Nunca',
'pregunta7' => 'Nunca',
'pregunta8' => 'Nunca',
'pregunta9' => 'Nunca',
'pregunta10' => 'Nunca',
'pregunta11' => 'Nunca',
'pregunta12' => 'Nunca',
'pregunta13' => 'Nunca',
'pregunta14' => 'Nunca',
'pregunta15' => 'Nunca',
'pregunta16' => 'Nunca',
'pregunta17' => 'Nunca',
'pregunta18' => 'Nunca',
'pregunta19' => 'Nunca',
'pregunta20' => 'Nunca',
'pregunta21' => 'Nunca',
'pregunta22' => 'Nunca',
'pregunta23' => 'Nunca',
'pregunta24' => 'Nunca',
'pregunta25' => 'Nunca',
'pregunta26' => 'Nunca',
'pregunta27' => 'Nunca',
'pregunta28' => 'Nunca',
'pregunta29' => 'Nunca',
'pregunta30' => 'Nunca',
'pregunta31' => 'Nunca',
'pregunta32' => 'Nunca',
'pregunta33' => 'Nunca',
'pregunta34' => 'Nunca',
'pregunta35' => 'Nunca',
'pregunta36' => 'Nunca',
'pregunta37' => 'Nunca',
'pregunta38' => 'Nunca',
'pregunta39' => 'Nunca',
'pregunta40' => 'Nunca',
'atiendeClientes' => 'No',
'pregunta41' => 'Nunca',
'pregunta42' => 'Nunca',
'pregunta43' => 'Nunca',
'esJefe' => 'No',
'pregunta44' => 'Nunca',
'pregunta45' => 'Nunca',
'pregunta46' => 'Nunca'
);

/*
Obteniendo los riesgos
*/
$cuestionario = new CrearCuestionarioFrp;
$riesgos = new CrearObtenerRiesgos;

$riesgos = $riesgos->crear(
    array('cuestionarioFrp' => $cuestionario->crear($datos))
);

echo '<pre>';
var_dump($riesgos);

/*
Cambiando valores
*/

$cambiarValor = new CambiarValoresParaBaseDeDatosCuestionarioFrp;

var_dump($cambiarValor->cambiarTodosDeTextoANumero($datos));

var_dump(
    $cambiarValor->cambiarTodosDeNumeroATexto(
        (array) $cambiarValor->cambiarTodosDeTextoANumero($datos)
    )
);
```