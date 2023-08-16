<?php

function inserir_usuario ($email,$senha,$nome)
{
    if (is_string($email) && is_string($senha) && is_string($nome)){
        $c = conectar_usuario();
        $sql="INSERT INTO usuario (email, senha, nome)
        VALUES ('$email', '$senha', '$nome');";
        $result = mysqli_query($c,$sql);
        if (mysqli_affected_rows($c) == 0) {
            return false;
        }else {
            return true;
        }
    }else {
        echo "\n"."Parametros invalidos";
        return false;
    }
}
function logar_usuario($email,$senha)
{
    if (is_string($email) && is_string($senha)){
        $c=conectar_usuario();
        $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha';";
        $consulta=mysqli_query($c,$sql);
        if (mysqli_num_rows($consulta)==0) {
            return false;
        }else {
            return true;
        }
    }else {
        echo "\n"."Parametros invalidos";
        return false;
    }
}