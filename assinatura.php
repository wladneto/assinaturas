<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($_GET["nome"]) ?></title>

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

</head>
<body>
    <table>
        <tr>
            <td width="80">
                <img src="../images/apple-icon-120x120.png" alt="CrudTec">
            </td>
            <td width="16" style="background-image: url('../images/images/line.jpg?v=27072020v1'); background-repeat: repeat-y; background-position: center;"></td>
            <td>
                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 1.3; color: #626262">
                    <span style="font-weight: bold; color: #4b4b4b; line-height: 2;"><?php echo htmlspecialchars($_GET["nome"]) ?></span><br>
                    <?php echo htmlspecialchars($_GET["funcao"]) ?><br>
                    <?php echo htmlspecialchars($_GET["telefone"]) ?><br>
                    <a href="maito:<?php echo htmlspecialchars($_GET["email"]) ?>" style="color: #626262; text-decoration: none !important;"><?php echo htmlspecialchars($_GET["email"]) ?></a><br>
                    <a href="https://crudtec.com.br" style="color: #35a8d6; text-decoration: none !important;">https://crudtec.com.br</a>
                </p>
            </td>
        </tr>
    </table>
</body>
</html>