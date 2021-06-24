<?php

namespace App\Classes;

class geradorSenha {

    public static function gerarSenha(){
        
        $novaSenha = '';
        $caracteres = 'abcdefhtiklmnopqrstuvwxyz_ABCDEFGHIJKLMNOPQRSTUVWXYZ-!@#$&';
        for($i = 0; $i <=10; $i++){
            $index = rand(0, strlen($caracteres));
            $novaSenha .= substr($caracteres, $index, 1);
        }
        return $novaSenha;

    }

}

?>