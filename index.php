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
    
    <?php
        require_once "vendor/autoload.php";

        use Fornecedor\Pagamento;
        use Prestador\Pagamento as PrestadorPagamento;
        $pagamentoFornecedor = new Pagamento;
        $pagamentoPrestador = new PrestadorPagamento;

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
    <pre><?=var_dump($pagamentoFornecedor)?></pre>
    <pre><?=var_dump($pagamentoPrestador)?></pre>

    <p>Nome: <?=$ClientePf->getNome()?></p>
    <p>Nome Fantasia: <?=$ClientePj->getNomeFantasia()?></p>
    <p>Área de atuação: <?=$ClienteMei->getAreaDeAtuacao()?></p>

</body>
</html>