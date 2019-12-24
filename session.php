<?php
session_start();
 
if (!isset($_SESSION["user_login"]) || !isset($_SESSION["pass_login"])) {
    // enviar o utilizador para a pagina de login
    header("Location: login");
} else {
    // o utilizador tem sessao iniciada e carregamos o resto da pagina
    $login_usuario = $_SESSION["user_login"];
    $senha_usuario = $_SESSION["pass_login"];
}
 
?>