<?php
class cliente {
    /* Propriedades/atributos */
    public string $nome;
    public string $email= " ";
    public string $senha;
    public array $telefones;

    
    /* Método construtor permite configurar a forma de inicialização do objeto, exigindo a atribuição de dados no momento de criar o objeto/instancia. o construtor é sempre chamado de forma automatica */
    public function _construct(string $nome,string $email,array $telefones){
        $this->nome = $nome;
        $this->email = $email;
        $this->telefones = $telefones;
    }
   

}
