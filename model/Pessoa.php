<?php 

class Pessoa {
    private $idPessoa;
    private $nome;
    private $telefone;
    private $email;
    private $endereco;

    public function Pessoa() {
        
    }

    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @return  self
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @return  self
     */ 
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * @return  self
     */ 
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;

        return $this;
    }
}
?>