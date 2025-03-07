<?php
        namespace PHP\Modelo;
    
        class Compra{
            //Encapsulamento
            private int     $codigo;
            private string  $produtos;
            private int  $quantidade;
            private int  $precoUnitario;
            private int  $precoFinal;

           public function __construct(int $codigo, string $produtos, int $quantidade, 
            int $precoUnitario, int $precoFinal ){

                $this->codigo = $codigo;
                $this->produtos = $produtos;
                $this->quantidade = $quantidade;
                $this->precoUnitario = $precoUnitario;
                $this->precoFinal = $precoFinal;  
    
            }//fim do método
      
        public function __get(string $dado):mixed{
            return $this->dado;
        }//Fim do método
    
        public function __set(string $variavel, string $dado):void{
            $this->variavel = $dado;
        }//Fim do método
    
        public function imprimir():string{
            return 
                "<br>Código: ". $this->codigo.
                "<br>Produtos: ". $this->produtos.
                "<br>Quantidade: " . $this->quantidade.
                "<br>Preço Unitario: ". $this->precoUnitario.
                "<br>Preço Final: ". $this->precoFinal;
        }//Fim do imprimir
    }//Fim da classe
?>
 