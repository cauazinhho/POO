<?php
    namespace  PHP\Modelo;
    require_once('Pessoa.php');//Chamar a classe
    require_once('Cliente.php');
    use PHP\Modelo\Pessoa;//Defina qual a classe
    use PHP\Modelo\Cliente;
 
    $cliente1 = new Cliente('123456789','Issac','1196501213','Rua', 1500);
 
    $cliente2 = new Cliente('123123121','asdadsa','1231121313','rua vi', 780);
   
 
    echo "<br><br>" . $cliente1->imprimir();
    echo "<br><br>" . $cliente2->imprimir();
   
?>