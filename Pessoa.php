<?php
    namespace PHP\Modelo;
 
    class Pessoa{
        //Encapsulamento
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected string $endereco;
        
        //
        public function __construct(string $cpf, string $nome, string $telefone, string $endereco){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
 
        }//fim do método
 
        //Método de acesso e modificadores
        //get e set
 
    public function __get(string $dados):mixed{
        return $this->dados;
    }//Fim do método
 
    public function __set(string $variavel, string $dados):void{
        $this->variavel = $dados;
    }//Fim do método
 
    public function imprimir():string{
        return "<br>CPF: ". $this->cpf.
               "<br>Nome: " . $this->nome.
               "<br>Telefone: ". $this->telefone.
               "<br>Endereço: ". $this->endereco;
    }//Fim do método
 
    }//Fim da classe Pessoa
?>
 