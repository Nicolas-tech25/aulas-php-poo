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
    </ul>

    <?php
        require_once "src/PessoaFisica.php";
        
        // Require pessoa juridica
        require_once "src/pessoajuridica.php";

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

    <h2>ClientePJ</h2>
    <h3>Nome: <?=$nome?></h3>
    <h3>Email: <?=$email?></h3>
    <h3>Ano: <?=$ano?></h3>
    <h3>CNPJ: <?=$cnpj?></h3>
    <h3>Nome Fantasia: <?=$nomeFantasia?></h3>

    <pre><?=var_dump($clientePF)?></pre>
    <pre><?=var_dump($clientePJ)?></pre>
</body>
</html>