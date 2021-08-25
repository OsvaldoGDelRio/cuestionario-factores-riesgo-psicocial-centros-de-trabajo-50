<?php
namespace src\cuestionario;

use Exception;

class ActitudesDeLosTrabajadoresQueSupervisa
{
    private $_esJefe;
    private $_pregunta44;
    private $_pregunta45;
    private $_pregunta46;

    private $_valoresDePreguntas = array(
        'Siempre' => 4,
        'Casi siempre' => 3,
        'Algunas veces' => 2,
        'Casi nunca' => 1,
        'Nunca' => 0
    );

    public function __construct
    (
        string $esJefe,
        string $pregunta44,
        string $pregunta45,
        string $pregunta46
    )
    {
        $this->_esJefe = $this->setEsJefe($esJefe);
        $this->_pregunta44 = $this->setPregunta($pregunta44);
        $this->_pregunta45 = $this->setPregunta($pregunta45);
        $this->_pregunta46 = $this->setPregunta($pregunta46);
    }

    public function pregunta44(): string
    {
        return $this->_pregunta44;       
    }

    public function pregunta45(): string
    {
        return $this->_pregunta45;
    }

    public function pregunta46(): string
    {
        return $this->_pregunta46;
    }

    public function pregunta44Valor(): int
    {
        return $this->retornarValor($this->_pregunta44);       
    }

    public function pregunta45Valor(): int
    {
        return $this->retornarValor($this->_pregunta45);
    }

    public function pregunta46Valor(): int
    {
        return $this->retornarValor($this->_pregunta46);
    }

    public function atiendeClientes(): string
    {
        return $this->_esJefe;
    }

    private function setPregunta(string $respuesta): string
    {
        if($this->verificarSiEsJefe())
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

    private function setEsJefe(string $esJefe): string
    {
        if($esJefe == 'Sí' || $esJefe == 'No')
        {
            return $esJefe;
        }

        throw new Exception("Error en Es jefe de otros", 1);
    }

    private function verificarRespuesta(string $respuesta): bool
    {
        if($respuesta == 'Siempre' || $respuesta == 'Casi siempre' || $respuesta == 'Algunas veces' || $respuesta == 'Casi nunca' || $respuesta == 'Nunca')
        {
            return true;
        }

        return false;
    }

    private function verificarSiEsJefe(): bool
    {
        if($this->_esJefe == 'Sí')
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
                $valor = $value;
            }
        }

        return $valor;
    }
}