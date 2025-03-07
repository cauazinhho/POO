<?php
        namespace PHP\Modelo;
    
        class Veiculo{
            //Encapsulamento
            private int     $codigo;
            private string  $placa;
            private string  $cliente;
            private string  $cor;
            private string  $modelo;
            private int     $ano;
            private string  $marca;
            
            public function __construct(int $codigo, string $placa, string $cliente, 
            string $cor, string $modelo, int $ano, string $marca){

                $this->codigo = $codigo;
                $this->placa = $placa;
                $this->cliente = $cliente;
                $this->cor = $cor;
                $this->modelo = $modelo;
                $this->ano = $ano;
                $this->marca = $marca;
    
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
                "<br>Placa: ". $this->placa.
                "<br>Cliente: " . $this->cliente.
                "<br>Cor: ". $this->cor.
                "<br>Modelo: ". $this->modelo.
                "<br>Ano: ". $this->ano.
                "<br>Marca: ". $this->marca;
        }//Fim do imprimir
    }//Fim da classe
?>
 