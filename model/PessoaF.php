<?php

require_once 'Pessoa.php';
class PessoaF extends Pessoa {

    private $cpf;
    private $rg;
    private $sexo;

    public function PessoaF() {
        
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @return  self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @return  self
     */ 
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @return  self
     */ 
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function __toString()
    {
        $pes = "Pessoa Fisíca: <br/>
                - Nome: " . $this->getNome() . "<br/>
                - Telefone: " . $this->getTelefone() . "<br/>
                - Email: " . $this->getEmail() . "<br/>
                - Endereço: " . $this->getEndereco() . "<br/>
                - Cpf: " . $this->getCpf() . "<br/>
                - Rg: " . $this->getRg() . "<br/>
                - Sexo: " . $this->getSexo() . "<br/>";

        return $pes;
    }
}

?>