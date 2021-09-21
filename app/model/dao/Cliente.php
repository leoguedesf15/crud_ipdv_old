<?php
namespace app\model;
class Cliente{
    private $nome;
    private $telefone;

    function __construct($nome,$telefone){
        $this->nome=$nome;
        $this->telefone=$telefone;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
}

?>