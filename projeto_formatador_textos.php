<!DOCTYPE html>
<html lang="-pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Formatador de textos</title>
</head>

<body>
    </div>
    <div class="row principal">
        <div class="col s6 offset-s3">
            <div class="card hoverable">
                <div class="card-content">
                    <span class="card-title center">
                        <h4>Formatador de Textos</h4>
                    </span>
                    <div class="row">
                        <form action="formata_texto.php" method="POST" class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" name="texto" class="materialize-textarea" placeholder="Insira o texto aqui"></textarea>
                                </div>
                                <p>
                                    <label>
                                        <input type="checkbox" name="valores" value="1" />
                                        <span>Apenas a primeira letra maiúscula</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input type="checkbox" name="valores" value="4" />
                                        <span>Primeira maiúscula de cada palavra</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input type="checkbox" name="valores" value="2" />
                                        <span>Todas as letras maiúsculas</span>
                                    </label>
                                </p>
                            </div>
                            <!-- Botões -->
                            <button class="btn waves-effect waves-light" type="submit" name="enviaDados">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                            <button class="btn waves-effect waves-light" type="reset">Limpar Dados
                                <i class="material-icons right">clear</i>
                            </button>
                        </form>
                    </div>
</body>

</html>
<!-- //criar um app web que vc escreve qualquer coisa e ele devolve formatado -->