<?php
namespace src\cuestionario;

use Exception;

class DecisionesQuePuedeTomarEnSuTrabajo
{
    private $_pregunta18;
    private $_pregunta19;
    private $_pregunta20;
    private $_pregunta21;
    private $_pregunta22;

    private $_valoresDePreguntas = array(
        'Siempre' => 0,
        'Casi siempre' => 1,
        'Algunas veces' => 2,
        'Casi nunca' => 3,
        'Nunca' => 4
    );

    public function __construct
    (
        string $pregunta18,
        string $pregunta19,
        string $pregunta20,
        string $pregunta21,
        string $pregunta22
    )
    {
        $this->_pregunta18 = $this->setPregunta($pregunta18);
        $this->_pregunta19 = $this->setPregunta($pregunta19);
        $this->_pregunta20 = $this->setPregunta($pregunta20);
        $this->_pregunta21 = $this->setPregunta($pregunta21);
        $this->_pregunta22 = $this->setPregunta($pregunta22);
    }

    public function pregunta18(): string
    {
        return $this->_pregunta18;
    }

    public function pregunta19(): string
    {
        return $this->_pregunta19;
    }

    public function pregunta20(): string
    {
        return $this->_pregunta20;
    }

    public function pregunta21(): string
    {
        return $this->_pregunta21;
    }

    public function pregunta22(): string
    {
        return $this->_pregunta22;
    }

    public function pregunta18Valor(): int
    {
        return $this->retornarValor($this->_pregunta18);
    }

    public function pregunta19Valor(): int
    {
        return $this->retornarValor($this->_pregunta19);
    }

    public function pregunta20Valor(): int
    {
        return $this->retornarValor($this->_pregunta20);
    }

    public function pregunta21Valor(): int
    {
        return $this->retornarValor($this->_pregunta21);
    }

    public function pregunta22Valor(): int
    {
        return $this->retornarValor($this->_pregunta22);
    }

    private function setPregunta(string $respuesta): string
    {
        if($this->verificarRespuesta($respuesta))
        {
            return $respuesta;
        }

        throw new Exception("Error procesando respuesta", 1);
        
    }

    private function verificarRespuesta(string $respuesta): bool
    {
        if($respuesta == 'Siempre' || $respuesta == 'Casi siempre' || $respuesta == 'Algunas veces' || $respuesta == 'Casi nunca' || $respuesta == 'Nunca')
        {
            return true;
        }

        return false;
    }

    private function retornarValor(string $respuesta): int
    {
        foreach ($this->_valoresDePreguntas as $key => $value)
        {
            if($key == $respuesta)
            {
                return $value;
            }
        }
    }
}