<?php
namespace src\cuestionario;

use Exception;

class ActividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene
{
    private $_pregunta10;
    private $_pregunta11;
    private $_pregunta12;
    private $_pregunta13;

    private $_valoresDePreguntas = array(
        'Siempre' => 4,
        'Casi siempre' => 3,
        'Algunas veces' => 2,
        'Casi nunca' => 1,
        'Nunca' => 0
    );

    public function __construct
    (
        string $pregunta10,
        string $pregunta11,
        string $pregunta12,
        string $pregunta13
    )
    {
        $this->_pregunta10 = $this->setPregunta($pregunta10);
        $this->_pregunta11 = $this->setPregunta($pregunta11);
        $this->_pregunta12 = $this->setPregunta($pregunta12);
        $this->_pregunta13 = $this->setPregunta($pregunta13);
    }

    public function pregunta10(): string
    {
        return $this->_pregunta10;
    }

    public function pregunta11(): string
    {
        return $this->_pregunta11;
    }

    public function pregunta12(): string
    {
        return $this->_pregunta12;
    }

    public function pregunta13(): string
    {
        return $this->_pregunta13;
    }

    public function pregunta10Valor(): int
    {
        return $this->retornarValor($this->_pregunta10);
    }

    public function pregunta11Valor(): int
    {
        return $this->retornarValor($this->_pregunta11);
    }

    public function pregunta12Valor(): int
    {
        return $this->retornarValor($this->_pregunta12);
    }

    public function pregunta13Valor(): int
    {
        return $this->retornarValor($this->_pregunta13);
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