<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Lista de hábitos</title>
</head>

<body>
    <div class="container">
        <h1>Novo Hábito</h1>
        <!-- Formulário para cadastro de pessoas
            Note a utilização do atributo name, que faz
            o link entre os elementos do DOM e o JavaScript-->
        <form id="formulario" action="inserthabito.php">
            <div class="row">
                <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <label class="form-label" for="nome">Nome: </label>
                        <input class="form-control" type="text" id="nome" name="nome" autofocus />
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <input class="btn btn-warning btn-lg" type="submit" value="Criar">
            </div>
        </form>
    </div>
    <script type="text/javascript">
        // Declara uma função para
        // validar o formulário
        var validaForm = function() {
            var nomeHabito = document.getElementById("nome").value;
            if ("" == nomeHabito) {
                alert("É necessário informar o nome do Hábito");
                return false;
            }
        }
        // Aqui declaramos que esta
        // função ocorre sempre no
        // submit do formulário
        document.getElementById("formulario").onsubmit = validaForm;
    </script>
</body>

</html>