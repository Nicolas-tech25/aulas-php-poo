<?php
    /* Classe abrtata
    não pode ser iniciada, ou seja,  não é possivel criar um objeto a partit desta classe. Ela é usada apenas como modelo para subclasses com herança. */
    abstract class cliente {
    /* Propriedades/atributos */
    public string $nome;
    private string $email= " ";
    private string $senha;
    private string $situacao = "a definir";

    /* metodo getters e setters */
    public function setNome(string $nome):void{
        $this->nome = $nome;
    }
    public function getNome():string{
       return $this->nome;
    }
    public function setEmail(string $email):void {
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    public function getEmail():string {
        return $this->email;
    }

    public function setSenha(string $senha):void {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function getSenha():string {
        return $this->senha;
    }


    /* Visibilidade protected
    Estes getters e setters poderão ser usados APENAS aqui na (classe cliente) e nas subclasses (Pessoa fisica e juridica) */
    protected function getSituacao(): string
    {
        return $this->situacao;
    }

    protected function setSituacao(string $situacao): self
    {
        $this->situacao = $situacao;

        return $this;
    }
}
