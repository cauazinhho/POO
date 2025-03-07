<?php
        namespace PHP\Modelo;
    
        class Produto{
            //Encapsulamento
            private int     $codigo;
            private string  $descricao;
            private string  $tamanho;
            private string  $peso;

           public function __construct(int $codigo, string $descricao, string $tamanho, 
            string $peso){

                $this->codigo = $codigo;
                $this->descricao = $descricao;
                $this->tamanho = $tamanho;
                $this->peso = $peso;
               
    
            }//fim do método

            //Método de acesso e modificadores
            //get e set
        public function __get(string $dado):mixed{
            return $this->dado;
        }//Fim do método
    
        public function __set(string $variavel, string $dado):void{
            $this->variavel = $dado;
        }//Fim do método
    
        public function imprimir():string{
            return 
                "<br>Código: ". $this->codigo.
                "<br>Descricao: ". $this->descricao.
                "<br>Tamanho: " . $this->tamanho.
                "<br>Peso: ". $this->peso;
        }//Fim do imprimir
    }//Fim da classe
?>
 