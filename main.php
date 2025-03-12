<?php
    namespace  PHP\Modelo;
    require_once('Pessoa.php');//Chamar a classe
    require_once('Cliente.php');
    require_once('Funcionario.php');
    require_once('Endereco.php');
    require_once('Veiculo.php');
    require_once('Compra.php');
    require_once('Produto.php');
    require_once('DAO/Conexao.php');


    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\Pessoa;//Defina qual a classe
    use PHP\Modelo\Cliente;
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\Endereco;
    use PHP\Modelo\Veiculo;
    use PHP\Modelo\Compra;
    use PHP\Modelo\Produto;

    $conexao = new Conexao();
    $conexao->conectar();


    /*
    $produto1 = new Produto(1, 'Produto Bom', 'Grande', '15kg');

    $veiculo1 = new Veiculo(1, 'EFF1525', 'Kleber', 'Preto', 'Golf', 2010, 'Volks'); 

    $endereco1 = new Endereco(1, 'Avenida Senador Vergueiro', 400, 'Centro', 
    'São Bernardo do Campo',
    'São Paulo', 02356-000, 'Brasil');
 
    $cliente1 = new Cliente('12345678900','Isaac','11965021213',$endereco1, 1500);
    $cliente2 = new Cliente('12312312100','asdadsa','12931121313', $endereco1, 780);
   
    $funcionario1 = new Funcionario('12345667890', 'Isaac', '12934445678', $endereco1, 890);
    $funcionario2 = new Funcionario('21345566778', 'Cleitin', '21936787899', $endereco1, 1890);
 
    echo "<br><br>" . $produto1->imprimir();
    echo "<br><br>" . $veiculo1->imprimir();
    echo "<br><br>" . $endereco1->imprimir();
    echo "<br><br>" . $cliente1->imprimir();
    echo "<br><br>" . $cliente2->imprimir();
    echo "<br><br>" . $funcionario1->imprimir();
    echo "<br><br>" . $funcionario2->imprimir();
   */
?>