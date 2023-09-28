<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 08</title>
</head>
<body>

    <h1>PHP com POO - Exemplo 08</h1>
    <hr> 

    <h2>Assuntos Abordados: </h2>

    <ul>
        <li>Propriedades e métodos estáticos</li>
        <li>Acesso direto sem objetos/instâncias</li>
        <li>uso do <code>self</code> para acessar dentro da classe os recursos estáticos</li>
    </ul>

    <hr>

    <?php
        require_once "src/pessoaFisica.php";
        $Cliente1 = new pessoaFisica;
        $Cliente1->setNome("Astrogildo");
        $Cliente1->setIdade(75);

        $Cliente2 = new pessoaFisica;
        $Cliente2->setNome("Jorge");
        $Cliente2->setIdade(18);

        require_once "src/utilitarios.php";
        Utilitarios::obterData();
    ?>

    <h2>Atendimentos do dia: <?=Utilitarios::$dataAtual?></h2>

    <h3>Cliente: <?=$Cliente1->getNome()?></h3>
    <p>Tipo de atendimento:
        <?=Utilitarios::definirAtendimento($Cliente1->getIdade())?>
    </p>

    <h3>Cliente: <?=$Cliente2->getNome()?></h3>
    <p>Tipo de atendimento:
        <?=Utilitarios::definirAtendimento($Cliente2->getIdade())?>
    </p>

    
</body>
</html>