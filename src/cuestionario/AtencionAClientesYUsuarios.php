<?php
namespace src\cuestionario;

use Exception;

class AtencionAClientesYUsuarios
{
    private $_atiendeClientes;
    private $_pregunta41;
    private $_pregunta42;
    private $_pregunta43;

    private $_valoresDePreguntas = array(
        'Siempre' => 4,
        'Casi siempre' => 3,
        'Algunas veces' => 2,
        'Casi nunca' => 1,
        'Nunca' => 0
    );

    public function __construct
    (
        string $atiendeClientes,
        string $pregunta41,
        string $pregunta42,
        string $pregunta43
    )
    {
        $this->_atiendeClientes = $this->setAtiendeClientes($atiendeClientes);
        $this->_pregunta41 = $this->setPregunta($pregunta41);
        $this->_pregunta42 = $this->setPregunta($pregunta42);
        $this->_pregunta43 = $this->setPregunta($pregunta43);
    }

    public function pregunta41(): string
    {
        return $this->_pregunta41;        
    }

    public function pregunta42(): string
    {
        return $this->_pregunta42;
    }

    public function pregunta43(): string
    {
        return $this->_pregunta43;
    }

    public function pregunta41Valor(): int
    {
        return $this->retornarValor($this->_pregunta41);        
    }

    public function pregunta42Valor(): int
    {
        return $this->retornarValor($this->_pregunta42);
    }

    public function pregunta43Valor(): int
    {
        return $this->retornarValor($this->_pregunta43);
    }

    public function atiendeClientes(): string
    {
        return $this->_atiendeClientes;
    }

    private function setPregunta(string $respuesta): string
    {
        if($this->verificarSiAtiendeClientes())
        {
            if($this->verificarRespuesta($respuesta))
            {
                return $respuesta;
            }

            throw new Exception("Error procesando respuesta", 1);
        }
        else
        {
            return 'Nunca';
        }  
    }

    private function setAtiendeClientes(string $atiendeClientes): string
    {
        if($atiendeClientes == 'Sí' || $atiendeClientes == 'No')
        {
            return $atiendeClientes;
        }

        throw new Exception("Error en Atiende Clientes", 1);
    }

    private function verificarRespuesta(string $respuesta): bool
    {
        if($respuesta == 'Siempre' || $respuesta == 'Casi siempre' || $respuesta == 'Algunas veces' || $respuesta == 'Casi nunca' || $respuesta == 'Nunca')
        {
            return true;
        }

        return false;
    }

    private function verificarSiAtiendeClientes(): bool
    {
        if($this->_atiendeClientes == 'Sí')
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