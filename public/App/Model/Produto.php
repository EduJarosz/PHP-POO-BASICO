<?php

namespace App\Model;

class Produto{

    private $id,$nome, $descricao;

    public function getid(){
        return $this->id;
    }

    public function setid($id){
        $this->id = $id;
    }

    public function getnome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
}