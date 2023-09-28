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
        <li>Poliformismo</li>
        <li>Sobreposição de métodos</li>
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

    <pre><?=var_dump($clientePF)?></pre>
    <pre><?=var_dump($clientePJ)?></pre>

    <hr>

    <article>
        <h2>ClientePJ</h2>
        <p>Nome: <?=$clientePJ->getNome()?></p>
        <p>Email: <?=$clientePJ->getEmail()?></p>
        <p>Ano: <?=$clientePJ->getAno()?></p>
        <p>CNPJ: <?=$clientePJ->getCnpj()?></p>
        <p>Nome Fantasia: <?=$clientePJ->getNomeFantasia()?></p>
    </article>
    
    <hr>

    <h2>Saída de dados</h2>

    <section>
        <?=$clientePF->exibirDados()?>
    </section>

    <section>
        <?=$clientePJ->exibirDados()?>
    </section>
    
</body>
</html>