<?php
    namespace PHP\Modelo\Telas;
    require_once('../DAO/Conexao.php');
    require_once('../DAO/Consultar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;

    $conexao = new Conexao();
    $consultar = new Consultar();

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Cadastrar Cliente</title>
    </head>

    <body>

        <h1 style="text-align:center;" >Consultar Endereço</h1>
        <form method="POST" class="form-control form-control-sm" style="width:50%;margin-left;">
            <!-- /////////////// -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Código</label>
                <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Digite Codigo">
            </div>

            <button type="submit" class="btn btn-primary">Consultar
                <?php
                $consultar->consultarEndereco($conexao, $_POST['codigo']);
                ?>
            </button>
        </form>
    </body>

</html>
