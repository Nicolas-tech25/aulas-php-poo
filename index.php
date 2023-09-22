<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 03</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 03</h1>
    <hr>

    <h2>Assuntos Abordados: </h2>
    <ul>
        <li>Método construtor com atribuição obrigatória de valores aos parâmetros/propriedades do objeto</li>
        <li>Uso do <code>$this</code> para acesso de propriedades do objeto</li>
    </ul>

    <?php 
        require_once "src/Cliente.php"; 
        $clienteA = new Cliente("fulano", "fulano@gmail.com");
        $clienteA = new Cliente("Neymar", "ney@msn.com");

        $clienteA->telefones = ["11-2345-0300"];
    ?>
</body>
</html>