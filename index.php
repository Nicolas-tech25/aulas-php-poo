<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 09</title>
</head>
<body>

    <h1>PHP com POO - Exemplo 09</h1>
    <hr> 

    <h2>Assuntos Abordados: </h2>

    <ul>
        <li>Namespaces: agrupamento e organização de recursos (classes,funções,constantes)</li>
        <li>Prevenção de conflitos entre classes de mesmo nome</li>
        <li>Configurar e usar <code>namespace</code> e <code>alias</code></li>
    </ul>

    <hr>

    <?php
        /* Só de fazer o require/importação das classes (SEM NAMESPACES6.), já da erro no servidor devido a terem o mesmo nome. */

        use Fornecedor\Pagamento;
        use Prestador\Pagamento as PrestadorPagamento;
        
        require_once "src/fornecedores/Pagamento.php";
        require_once "src/prestadores/Pagamento.php";

        // Forma 01 de usar classes com namespaces
        // $pagamentoFornecedor = new Fornecedor\Pagamento;
        // $pagamentoPrestador = new Prestador\Pagamento;


        // Forma 02 de usar classes com namespaces
        // use Fornecedor\Pagamento;
        // use Prestador\Pagamento as PrestadorPagamento;

        // $pagamentoFornecedor = new Pagamento;
        // $pagamentoPrestador = new PrestadorPagamento;

        $pagamentoFornecedor = new Pagamento;
        $pagamentoPrestador = new PrestadorPagamento;
    ?>

    <pre><?=var_dump($pagamentoFornecedor)?></pre>
    <pre><?=var_dump($pagamentoPrestador)?></pre>

    <hr>

    <!-- Exercicios: -->
    <?php
        $ClienteTb = new Cliente;
        $ClientePf = new PessoaFisica;
        $ClientePj = new PessoaJuridica;
        $ClienteMei = new MEI;
    ?> 
</body>
</html>