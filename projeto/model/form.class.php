<?php

class Form{
    private $nome;
    private $telefone;
    private $email;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getEmail()
    {
    return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function __construct($nome, $telefone)
    {
        $this->nome;
        $this->telefone;
    }

    public function __toString()
    {
        return "<br> Nome: " . $this->nome . 
        "<br> Telefone: " . $this->telefone;
    }
}

?>