<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 10</title>
</head>
<body>

    <h1>PHP com POO - Exemplo 10</h1>
    <hr> 

    <h2>Assuntos Abordados: </h2>

    <ul>
        <li>Composer: Gerenciador de dependencia PHP</li>
        <li>configurar o projeto com coposer usando <code>composer.json</code></li>
        <li>Autoload de classes evitando muitos requires e ou/ require manuais</li>
    </ul>

    <hr>

    <!-- Exercicios: -->
    <?php
        require_once "src/pessoaFisica.php";
        require_once "src/pessoaJuridica.php";
        require_once "src/MEI.php";

        // Pessoa Fisica
        $ClientePf = new  Tabajara\PessoaFisica;
        $ClientePf->setNome("Cleber");

        // Pessoa Juridica
        $ClientePj = new  Tabajara\pessoaJuridica;
        $ClientePj->setNomeFantasia("Cleber do grau");

        // Mei
        $ClienteMei = new  Tabajara\Mei;
        $ClienteMei->setAreaDeAtuacao("Motoca");
    ?> 

    <p>Nome: <?=$ClientePf->getNome()?></p>
    <p>Nome Fantasia: <?=$ClientePj->getNomeFantasia()?></p>
    <p>Área de atuação: <?=$ClienteMei->getAreaDeAtuacao()?></p>

</body>
</html>