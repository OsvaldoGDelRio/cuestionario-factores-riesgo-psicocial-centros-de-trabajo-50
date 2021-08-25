<?php
namespace src\cuestionario;

use Exception;

class RelacionesConSusCompañerosDeTrabajoYSuJefe
{
    private $_pregunta28;
    private $_pregunta29;
    private $_pregunta30;
    private $_pregunta31;
    private $_pregunta32;
    private $_pregunta33;

    private $_valoresDePreguntas28a33 = array(
        'Siempre' => 0,
        'Casi siempre' => 1,
        'Algunas veces' => 2,
        'Casi nunca' => 3,
        'Nunca' => 4
    );

    private $_pregunta34;
    private $_pregunta35;
    private $_pregunta36;
    private $_pregunta37;
    private $_pregunta38;
    private $_pregunta39;
    private $_pregunta40;

    private $_valoresDePreguntas34a40 = array(
        'Siempre' => 4,
        'Casi siempre' => 3,
        'Algunas veces' => 2,
        'Casi nunca' => 1,
        'Nunca' => 0
    );

    public function __construct
    (
        string $pregunta28,
        string $pregunta29,
        string $pregunta30,
        string $pregunta31,
        string $pregunta32,
        string $pregunta33,
        string $pregunta34,
        string $pregunta35,
        string $pregunta36,
        string $pregunta37,
        string $pregunta38,
        string $pregunta39,
        string $pregunta40
    )
    {
        $this->_pregunta28 = $this->setPregunta($pregunta28);
        $this->_pregunta29 = $this->setPregunta($pregunta29);
        $this->_pregunta30 = $this->setPregunta($pregunta30);
        $this->_pregunta31 = $this->setPregunta($pregunta31);
        $this->_pregunta32 = $this->setPregunta($pregunta32);
        $this->_pregunta33 = $this->setPregunta($pregunta33);
        $this->_pregunta34 = $this->setPregunta($pregunta34);
        $this->_pregunta35 = $this->setPregunta($pregunta35);
        $this->_pregunta36 = $this->setPregunta($pregunta36);
        $this->_pregunta37 = $this->setPregunta($pregunta37);
        $this->_pregunta38 = $this->setPregunta($pregunta38);
        $this->_pregunta39 = $this->setPregunta($pregunta39);
        $this->_pregunta40 = $this->setPregunta($pregunta40);
    }

    public function pregunta28(): string
    {
        return $this->_pregunta28;
    }

    public function pregunta29(): string
    {
        return $this->_pregunta29;
    }

    public function pregunta30(): string
    {
        return $this->_pregunta30;
    }

    public function pregunta31(): string
    {
        return $this->_pregunta31;
    }

    public function pregunta32(): string
    {
        return $this->_pregunta32;
    }

    public function pregunta33(): string
    {
        return $this->_pregunta33;
    }

    public function pregunta28Valor(): int
    {
        return $this->retornarValor28a33($this->_pregunta28);
    }

    public function pregunta29Valor(): int
    {
        return $this->retornarValor28a33($this->_pregunta29);
    }

    public function pregunta30Valor(): int
    {
        return $this->retornarValor28a33($this->_pregunta30);
    }

    public function pregunta31Valor(): int
    {
        return $this->retornarValor28a33($this->_pregunta31);
    }

    public function pregunta32Valor(): int
    {
        return $this->retornarValor28a33($this->_pregunta32);
    }

    public function pregunta33Valor(): int
    {
        return $this->retornarValor28a33($this->_pregunta33);
    }


    public function pregunta34(): string
    {
        return $this->_pregunta34;
    }

    public function pregunta35(): string
    {
        return $this->_pregunta35;
    }

    public function pregunta36(): string
    {
        return $this->_pregunta36;
    }

    public function pregunta37(): string
    {
        return $this->_pregunta37;
    }

    public function pregunta38(): string
    {
        return $this->_pregunta38;
    }

    public function pregunta39(): string
    {
        return $this->_pregunta39;
    }

    public function pregunta40(): string
    {
        return $this->_pregunta40;
    }

    public function pregunta34Valor(): int
    {
        return $this->retornarValor34a40($this->_pregunta34);
    }

    public function pregunta35Valor(): int
    {
        return $this->retornarValor34a40($this->_pregunta35);
    }

    public function pregunta36Valor(): int
    {
        return $this->retornarValor34a40($this->_pregunta36);
    }

    public function pregunta37Valor(): int
    {
        return $this->retornarValor34a40($this->_pregunta37);
    }

    public function pregunta38Valor(): int
    {
        return $this->retornarValor34a40($this->_pregunta38);
    }

    public function pregunta39Valor(): int
    {
        return $this->retornarValor34a40($this->_pregunta39);
    }

    public function pregunta40Valor(): int
    {
        return $this->retornarValor34a40($this->_pregunta40);
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

    private function retornarValor28a33(string $respuesta): int
    {
        foreach ($this->_valoresDePreguntas28a33 as $key => $value)
        {
            if($key == $respuesta)
            {
                return $value;
            }
        }
    }

    private function retornarValor34a40(string $respuesta): int
    {
        foreach ($this->_valoresDePreguntas34a40 as $key => $value)
        {
            if($key == $respuesta)
            {
               $valor = $value;
            }
        }

        return $valor;
    }
}