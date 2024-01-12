<?php 
    if ($_SERVER ['REQUEST_METHOD'] != 'POST') {
        die ('Acesso invalido!');
    } elseif (strlen($_POST['usuario']) == 0 && strlen($_POST['senha']) == 0 || strlen($_POST['usuario']) == 0 || strlen($_POST['senha']) == 0){
        echo '[ERRO] Preencha todos os campos!';
    } else {
        $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
        $senha = isset ($_POST['senha']) ? $_POST['senha'] : '';
    
        $login = [
            "user" => "admin",
            "password" => "admin"
        ];

        if ($usuario == $login["user"] && $senha == $login["password"]) {
            echo 'usuário:' . $usuario;
            echo '<br>senha:' . $senha;
        } else {
            echo '[ERRO] Usuário inválido';
        }
    }
?>