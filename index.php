<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 05</title>
</head>
<body>

    <h1>PHP com POO - Exemplo 05</h1>
    <hr> 

    <h2>Assuntos Abordados: </h2>

    <ul>
        <li>Herança(Super classe e sub classe)</li>
        <li>Métodos/propriedades protegidos (acessíveis apenas pela classe em que foram definidos e pelas subclasses)</li>
        <li>Classe abstrata: Não permitir instâncias ou objetos.</li>
        <li>Classe final: não permite subclasses/heranças.</li>
    </ul>

    <?php
        require_once "src/PessoaFisica.php";
        
        // Require pessoa juridica
        require_once "src/PessoaJuridica.php";

        $clientePF = new PessoaFisica;
        $clientePJ = new PessoaJuridica;

        // Colocar um nome
        $clientePF->setNome("Craque neto");
        $clientePF->setEmail("Jogouaonde.10@gmail.com");
        $clientePF->setIdade(57);
        $clientePF->setCpf("452.618.338-50");

        //Dados Pessoa Juridica
        $clientePJ->setNome("Ronaldo");
        $clientePJ->setEmail("Ronaldo.10@gmail.com");
        $clientePJ->setAno(2009);
        $clientePJ->setCnpj("32.088.0001/000.51");
        $clientePJ->setnomeFantasia("Real Cruzeiro");
    ?>

    <hr>
    <!-- Exibição de dados Cliente PJ -->

    <article>
        <h2>ClientePJ</h2>
        <p>Nome: <?=$clientePJ->getNome()?></p>
        <p>Email: <?=$clientePJ->getEmail()?></p>
        <p>Ano: <?=$clientePJ->getAno()?></p>
        <p>CNPJ: <?=$clientePJ->getCnpj()?></p>
        <p>Nome Fantasia: <?=$clientePJ->getNomeFantasia()?></p>
    </article>

    <hr>

    <pre><?=var_dump($clientePF)?></pre>
    <pre><?=var_dump($clientePJ)?></pre>

    <?php
        // Cliente genérico
        require_once "src/Cliente.php";
        $clienteGenerico = new Cliente;
    ?>
    <pre><?=var_dump($clienteGenerico)?></pre>

    <?php
        require_once "src/MEI.php";
        $ClienteMei = new MEI;
        $ClienteMei->setNome("Marina Tanaka");
        $ClienteMei->setAnoFundacao(2023);
        $ClienteMei->setNomeFantasia("Tanaka produções");
        $ClienteMei->setAreaDeAtuacao("Ervas Medicinais");
    ?>

<pre><?=var_dump($ClienteMei)?></pre>
</body>
</html>