<?php
class utilitarios{
    // Propriedade estática
    public static string $dataAtual;

    // Método estático
    public static function obterData(){
        /* self:: Propriedade
        permite o acesso á propriedade estática */
        self::$dataAtual = date("d/m/y");
    }
}