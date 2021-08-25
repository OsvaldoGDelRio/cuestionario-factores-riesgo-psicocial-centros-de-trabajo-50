<?php
namespace src\cuestionario;

use Exception;

class TiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares
{
    private $_pregunta14;
    private $_pregunta15;
    private $_pregunta16;
    private $_pregunta17;

    private $_valoresDePreguntas = array(
        'Siempre' => 4,
        'Casi siempre' => 3,
        'Algunas veces' => 2,
        'Casi nunca' => 1,
        'Nunca' => 0
    );

    public function __construct
    (
        string $pregunta14,
        string $pregunta15,
        string $pregunta16,
        string $pregunta17
    )
    {
        $this->_pregunta14 = $this->setPregunta($pregunta14);
        $this->_pregunta15 = $this->setPregunta($pregunta15);
        $this->_pregunta16 = $this->setPregunta($pregunta16);
        $this->_pregunta17 = $this->setPregunta($pregunta17);
    }

    public function pregunta14(): string
    {
        return $this->_pregunta14;
    }

    public function pregunta15(): string
    {
        return $this->_pregunta15;
    }

    public function pregunta16(): string
    {
        return $this->_pregunta16;
    }

    public function pregunta17(): string
    {
        return $this->_pregunta17;
    }

    public function pregunta14Valor(): int
    {
        return $this->retornarValor($this->_pregunta14);
    }

    public function pregunta15Valor(): int
    {
        return $this->retornarValor($this->_pregunta15);
    }

    public function pregunta16Valor(): int
    {
        return $this->retornarValor($this->_pregunta16);
    }

    public function pregunta17Valor(): int
    {
        return $this->retornarValor($this->_pregunta17);
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