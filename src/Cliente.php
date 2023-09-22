<?php
class cliente {
    /* Propriedades/atributos */
    public string $nome;
    public string $email= " ";
    public string $senha;
    public array $telefones;

    /* Métodos (ou comportamentos) */
    public function exibirDados() :void {
        echo "<section>";
        echo "<h2> $this->nome <h2>";
        echo "<h2> $this->email <h2>";
        echo "</section>";
    }

}
