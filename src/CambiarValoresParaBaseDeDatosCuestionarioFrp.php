<?php
namespace src;

use stdClass;

class CambiarValoresParaBaseDeDatosCuestionarioFrp
{
    private $preguntas = array(
        'pregunta1' => 'desc',
        'pregunta2' => 'desc',
        'pregunta3' => 'desc',
        'pregunta4' => 'desc',
        'pregunta5' => 'desc',
        'pregunta6' => 'desc',
        'pregunta7' => 'desc',
        'pregunta8' => 'desc',
        'pregunta9' => 'desc',
        'pregunta10' => 'desc',
        'pregunta11' => 'desc',
        'pregunta12' => 'desc',
        'pregunta13' => 'desc',
        'pregunta14' => 'desc',
        'pregunta15' => 'desc',
        'pregunta16' => 'desc',
        'pregunta17' => 'desc',
        'pregunta18' => 'asc',
        'pregunta19' => 'asc',
        'pregunta20' => 'asc',
        'pregunta21' => 'asc',
        'pregunta22' => 'asc',
        'pregunta23' => 'asc',
        'pregunta24' => 'asc',
        'pregunta25' => 'asc',
        'pregunta26' => 'asc',
        'pregunta27' => 'asc',
        'pregunta28' => 'asc',
        'pregunta29' => 'asc',
        'pregunta30' => 'asc',
        'pregunta31' => 'asc',
        'pregunta32' => 'asc',
        'pregunta33' => 'asc',
        'pregunta34' => 'desc',
        'pregunta35' => 'desc',
        'pregunta36' => 'desc',
        'pregunta37' => 'desc',
        'pregunta38' => 'desc',
        'pregunta39' => 'desc',
        'pregunta40' => 'desc',
        'pregunta41' => 'desc',
        'pregunta42' => 'desc',
        'pregunta43' => 'desc',
        'pregunta44' => 'desc',
        'pregunta45' => 'desc',
        'pregunta46' => 'desc'
    );

    private $atiendeClientes = array(
        'No' => 1,
        'Sí' => 2
    );

    private $esJefe = array(
        'No' => 1,
        'Sí' => 2
    );

    private $asc = array(
        'Siempre' => 0,
        'Casi siempre' => 1,
        'Algunas veces' => 2,
        'Casi nunca' => 3,
        'Nunca' => 4
    );
    private $desc = array(
        'Siempre' => 4,
        'Casi siempre' => 3,
        'Algunas veces' => 2,
        'Casi nunca' => 1,
        'Nunca' => 0
    );

    public function cambiarTodosDeNumeroATexto(array $preguntas): object
    {   
        $datos = new stdClass;

        foreach ($preguntas as $pregunta => $valor)
        {
            $datos->{$pregunta} = $this->cambiarDeNumeroATexto($pregunta, $valor);
        }

        return $datos;
    }

    public function cambiarTodosDeTextoANumero(array $preguntas): object
    {
        $datos = new stdClass;

        foreach ($preguntas as $pregunta => $valor)
        {
            $datos->{$pregunta} = $this->cambiarDeTextoANumero($pregunta, $valor);
        }

        return $datos;
    }

    public function cambiarDeNumeroATexto(string $preguntaEntrante, int $valor): string
    {
        if($preguntaEntrante == 'atiendeClientes' || $preguntaEntrante == 'esJefe')
        {
            foreach ($this->{$preguntaEntrante} as $key => $value)
            {
                if($value == $valor)
                {
                    $resultado = $key;
                }
            }
        }
        else
        {
            foreach($this->preguntas as $pregunta => $pre)
            {
                if($pregunta == $preguntaEntrante)
                {
                    foreach ($this->{$pre} as $key => $v)
                    {
                        if($valor == $v)
                        {
                            $resultado = $key;
                        }
                    }
                }
            }
        }

        return $resultado;
        
    }

    public function cambiarDeTextoANumero(string $preguntaEntrante, string $valor): int
    {
        if($preguntaEntrante == 'atiendeClientes' || $preguntaEntrante == 'esJefe')
        {
            $resultado = $this->{$preguntaEntrante}[$valor];
        }
        else
        {
            foreach($this->preguntas as $pregunta => $pre)
            {
                if($pregunta == $preguntaEntrante)
                {
                    $resultado = $this->{$pre}[$valor];
                }
            }
        }

        return $resultado;
    }   
}