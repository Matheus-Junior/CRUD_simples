<?php

include_once('funcaoUsuario.php');
include_once('conexao.php');
extract($_REQUEST, EXTR_SKIP);

if (isset($acao)) {
    if ($acao == "SignIn") {
        if (isset($email) || isset($senha)) {
            $email = htmlspecialchars_decode(strip_tags($email));
            $passwd = htmlspecialchars_decode(strip_tags($senha));
            if (logar_usuario($email, $senha)) {
                echo "<br>" . "Email e Senha ok";
            }else {
                echo "<br>" . "Email e Senha inexistente";
            }
        }    
    }
    if ($acao == "SignUp") {
        if (isset($email) || isset($senha) || isset($nome)) {
            $email = htmlspecialchars_decode(strip_tags($email));
            $passwd = htmlspecialchars_decode(strip_tags($senha));
            $nome = htmlspecialchars_decode(strip_tags($nome));
            if (inserir_usuario($email, $senha, $nome)) {
                echo "<br/>" . "Usuario inserido!!" . "<br>";
            }else {
                echo "<br/>" . "Usuario não inserido!!" . "<br>";
            }
        }
    }
}