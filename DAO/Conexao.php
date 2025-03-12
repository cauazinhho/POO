<?php
    namespace PHP\Modelo\DAO;
 
    class conexao{
        function conexao()
        try {
            $conn = mysqli_connect('localhost','root','','TI21M');
 
            if ($conn) {
                echo "<br>Conectado com sucesso!";
                return $conn;
            }
        } catch (Exception $erro) {
           return "Algo deu errado!.$erro<br><br>";
        }
    }//fim da classe
 
 
?>