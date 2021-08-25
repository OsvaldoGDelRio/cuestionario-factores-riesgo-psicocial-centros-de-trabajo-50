<?php
namespace src\cuestionario;

use Exception;

class CondicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo
{
    private $_pregunta1;
    private $_pregunta2;
    private $_pregunta3;
    private $_pregunta4;
    private $_pregunta5;
    private $_pregunta6;
    private $_pregunta7;
    private $_pregunta8;
    private $_pregunta9;

    private $_valoresDePreguntas = array(
        'Siempre' => 4,
        'Casi siempre' => 3,
        'Algunas veces' => 2,
        'Casi nunca' => 1,
        'Nunca' => 0
    );

    public function __construct
    (
        string $pregunta1,
        string $pregunta2,
        string $pregunta3,
        string $pregunta4,
        string $pregunta5,
        string $pregunta6,
        string $pregunta7,
        string $pregunta8,
        string $pregunta9
    )
    {
        $this->_pregunta1 = $this->setPregunta($pregunta1);
        $this->_pregunta2 = $this->setPregunta($pregunta2);
        $this->_pregunta3 = $this->setPregunta($pregunta3);
        $this->_pregunta4 = $this->setPregunta($pregunta4);
        $this->_pregunta5 = $this->setPregunta($pregunta5);
        $this->_pregunta6 = $this->setPregunta($pregunta6);
        $this->_pregunta7 = $this->setPregunta($pregunta7);
        $this->_pregunta8 = $this->setPregunta($pregunta8);
        $this->_pregunta9 = $this->setPregunta($pregunta9);
    }

    public function pregunta1(): string
    {
        return $this->_pregunta1;
    }

    public function pregunta2(): string
    {
        return $this->_pregunta2;
    }

    public function pregunta3(): string
    {
        return $this->_pregunta3;
    }

    public function pregunta4(): string
    {
        return $this->_pregunta4;
    }

    public function pregunta5(): string
    {
        return $this->_pregunta5;
    }

    public function pregunta6(): string
    {
        return $this->_pregunta6;
    }

    public function pregunta7(): string
    {
        return $this->_pregunta7;
    }

    public function pregunta8(): string
    {
        return $this->_pregunta8;
    }

    public function pregunta9(): string
    {
        return $this->_pregunta9;
    }

    public function pregunta1Valor(): int
    {
        return $this->retornarValor($this->_pregunta1);
    }

    public function pregunta2Valor(): int
    {
        return $this->retornarValor($this->_pregunta2);
    }

    public function pregunta3Valor(): int
    {
        return $this->retornarValor($this->_pregunta3);
    }

    public function pregunta4Valor(): int
    {
        return $this->retornarValor($this->_pregunta4);
    }

    public function pregunta5Valor(): int
    {
        return $this->retornarValor($this->_pregunta5);
    }

    public function pregunta6Valor(): int
    {
        return $this->retornarValor($this->_pregunta6);
    }

    public function pregunta7Valor(): int
    {
        return $this->retornarValor($this->_pregunta7);
    }

    public function pregunta8Valor(): int
    {
        return $this->retornarValor($this->_pregunta8);
    }

    public function pregunta9Valor(): int
    {
        return $this->retornarValor($this->_pregunta9);
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