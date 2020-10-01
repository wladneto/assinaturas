<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrudTec | Gerador de Assinatura de E-mail</title>

    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/manifest.json">
    <meta name="msapplication-TileColor" content="#00d458">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <meta name="theme-color" content="#00d458">

    <script src="libs/jquery-3.4.1.min.js"></script>
    <script src="libs/jquery.maskedinput.min.js"></script>

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css?v=27072020v1" />

</head>
<body>
    <div id="container">
        <form action="assinatura.php" method="get" id="formulario">
            <h1 id="logo">Gerador de Assinatura de E-mail</h1>
            <span>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
            </span>
            <span>
                <label for="funcao">Função</label>
                <input type="text" name="funcao" id="funcao" required>
            </span>
            <span>
                <label for="email">E-mail Corporativo</label>
                <input type="email" name="email" id="email" placeholder="email@crudtec.com.br" required>
            </span>
            <span>
                <label for="telefone">Celular</label>
                <input type="text" name="telefone" id="telefone" required>
            </span>
            <span>
                <input type="submit" value="Gerar Assinatura">
            </span>

            <script>
                jQuery("#telefone")
                    .mask("(99) 9999-9999?9")
                    .focusout(function (event) {
                        var target, phone, element;
                        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
                        phone = target.value.replace(/\D/g, ''); //Remove tudo o que não é dígito
                        element = $(target);
                        element.unmask();
                        if(phone.length > 10) {
                            element.mask("(99) 99999-999?9");
                        } else {
                            element.mask("(99) 9999-9999?9");
                        }
                });
            </script>
        </form>
    </div>
</body>
</html>