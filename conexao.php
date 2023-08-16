<?php

function conectar_usuario(){
    $c = mysqli_connect("localhost", "root", "2279matheus", "Usuario");
    if(mysqli_connect_errno() <> 0){
        $msg = mysqli_connect_error($c);
        echo "\n Erro na conexão SQL! $msg";
    }
    else{
        echo "\n Conexão ok, podemos continuar!";
    }
    return $c;
}