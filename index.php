<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" >
    <title>Document</title>
</head>

<body>
    <div class="container">
    <div class="row">
        <div class="d-flex justify-content-center align-items-center">
        <h1>Lista de Hábitos</h1>
        </div>
    </div>
    <div class="row">    
    <div class="d-flex justify-content-center align-items-center">
        <p>Cadastre aqui os hábitos que você tem que vencer para melhoras sua vida!</p>
</div>
</div>


        <?php

        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "listadehabito";

        $conexao = new mysqli($servidor, $usuario, $senha, $banco);

        if ($conexao->connect_error) {
            die("Falha na conexão: " . $conexao->connect_error);
        }

        $sql = " SELECT id, nome FROM habito WHERE status = 'A'";
        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0) {

        ?>
        <div class="table-responsive">
            <table class="table table-hover table-warning">
                <thead>
                    <tr>
                        <th>Hábito</th>
                        <th>Vencer</th>
                        <th>Desistir</th>
                    </tr>
                </thead>
                <tbody>
                    <?

                    while ($registro = $resultado->fetch_assoc()) {
                    ?>

                        <tr>
                            <td><?php echo $registro["nome"]; ?></td>
                            <td><a class="btn btn-success" href="vencerhabito.php?id=<?php echo $registro['id']; ?>">Vencer</a></td>
                            <td><a class="btn btn-danger" href="desistirhabito.php?id=<?php echo $registro['id']; ?>">Desistir</a></td>
                        </tr>
                    <?
                    }
                    ?>
                </tbody>
            </table>
                </div>

            <h5> Continue mudando sua vida! </h5>
            <h6> Cadastre mais hábitos </h6>

        <?

                 } else {
        ?>
            <h5> Você não possui hábitos cadastrados! </h5>
            <h6> Começe já a mudar sua vida! </h6>
        <?
        }

        $conexao->close();

        ?>

    <a class="btn btn-success" href="novohabito.php">Cadastrar Hábito</a>
    </div>

</body>

</html>