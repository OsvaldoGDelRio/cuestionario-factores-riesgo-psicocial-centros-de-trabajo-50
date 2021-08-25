<?php
namespace src\cuestionario;
use Exception;

class CapacitacionEInformacionQueRecibeSobreSuTrabajo
{
    private $_pregunta23;
    private $_pregunta24;
    private $_pregunta25;
    private $_pregunta26;
    private $_pregunta27;

    private $_valoresDePreguntas = array(
        'Siempre' => 0,
        'Casi siempre' => 1,
        'Algunas veces' => 2,
        'Casi nunca' => 3,
        'Nunca' => 4
    );

    public function __construct
    (
        string $pregunta23,
        string $pregunta24,
        string $pregunta25,
        string $pregunta26,
        string $pregunta27
    )
    {
        $this->_pregunta23 = $this->setPregunta($pregunta23);
        $this->_pregunta24 = $this->setPregunta($pregunta24);
        $this->_pregunta25 = $this->setPregunta($pregunta25);
        $this->_pregunta26 = $this->setPregunta($pregunta26);
        $this->_pregunta27 = $this->setPregunta($pregunta27);
    }

    public function pregunta23(): string
    {
        return $this->_pregunta23;
    }

    public function pregunta24(): string
    {
        return $this->_pregunta24;
    }

    public function pregunta25(): string
    {
        return $this->_pregunta25;
    }

    public function pregunta26(): string
    {
        return $this->_pregunta26;
    }

    public function pregunta27(): string
    {
        return $this->_pregunta27;
    }

    public function pregunta23Valor(): int
    {
        return $this->retornarValor($this->_pregunta23);
    }

    public function pregunta24Valor(): int
    {
        return $this->retornarValor($this->_pregunta24);
    }

    public function pregunta25Valor(): int
    {
        return $this->retornarValor($this->_pregunta25);
    }

    public function pregunta26Valor(): int
    {
        return $this->retornarValor($this->_pregunta26);
    }

    public function pregunta27Valor(): int
    {
        return $this->retornarValor($this->_pregunta27);
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