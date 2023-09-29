<?php
namespace Tabajara;
require_once "Cliente.php";
class PessoaJuridica extends Cliente{
    private int $ano;
    private string $cnpj;
    private string $nomeFantasia;

    public function exibirDados():void{
        /* parent::recursos
        Permite acesso aos recursos da classe pai (superclasse) */
        parent::exibirDados();
        echo "<p>Nome Fantasia: $this->nomeFantasia</p>";
    }

    public function __construct(){
        /* Acessando o metodo setter PROTEGIDO (existente em cliente) */
        $this->setSituacao("em análise");
    }

    /**
     * Get the value of ano
     *
     * @return int
     */
    public function getAno(): int
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     *
     * @param int $ano
     *
     * @return self
     */
    public function setAno(int $ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of cnpj
     *
     * @return string
     */
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     *
     * @param string $cnpj
     *
     * @return self
     */
    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get the value of nomeFantasia
     *
     * @return string
     */
    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

    /**
     * Set the value of nomeFantasia
     *
     * @param string $nomeFantasia
     *
     * @return self
     */
    public function setNomeFantasia(string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }
}