<?php

class Usuario {
    private $Id;
    private $NomeUsuario;
    private $Usuario;
    private $Senha;

    public function Usuario() {
        
    }
 
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @return  self
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    public function getNomeUsuario()
    {
        return $this->NomeUsuario;
    }

    /**
     * @return  self
     */ 
    public function setNomeUsuario($NomeUsuario)
    {
        $this->NomeUsuario = $NomeUsuario;

        return $this;
    }

    public function getUsuario()
    {
        return $this->Usuario;
    }

    /**
     * @return  self
     */ 
    public function setUsuario($Usuario)
    {
        $this->Usuario = $Usuario;

        return $this;
    }

    public function getSenha()
    {
        return $this->Senha;
    }

    /**
     * @return  self
     */ 
    public function setSenha($Senha)
    {
        $this->Senha = $Senha;

        return $this;
    }

    public function __toString()
    {
        $user = "Usuário: <br/> 
                 - Nome Usuário: " . $this->getNomeUsuario() . "<br/>
                 - Usuário: " . $this->getUsuario() . "<br/>";

        return $user;
    }
}
?>