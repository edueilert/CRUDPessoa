<?php 

require_once 'Pessoa.php';
class PessoaJ extends Pessoa{
    private $cnpj;
    private $nomeFantasia;
    private $insEstad;

    public function PessoaJ(){

    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @return  self
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    /**
     * @return  self
     */ 
    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    public function getInsEstad()
    {
        return $this->insEstad;
    }

    /**
     * @return  self
     */ 
    public function setInsEstad($insEstad)
    {
        $this->insEstad = $insEstad;

        return $this;
    }

    public function __toString()
    {
        $pes = "Pessoa Fisíca: <br/>
                - Nome: " . $this->getNome() . "<br/>
                - Telefone: " . $this->getTelefone() . "<br/>
                - Email: " . $this->getEmail() . "<br/>
                - Endereço: " . $this->getEndereco() . "<br/>
                - Cnpj: " . $this->getCnpj() . "<br/>
                - Nome Fantasia: " . $this->getNomeFantasia() . "<br/>
                - Inscrição Estadual: " . $this->getInsEstad() . "<br/>";

        return $pes;
    }
}
