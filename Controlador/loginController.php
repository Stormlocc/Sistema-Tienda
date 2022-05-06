<?php
include_once 'Modelo/usuario.php';
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];

$usuario = new Usuario();
$usuario->Logearse($user,$pass);
foreach($usuario->objetos as $objeto){
    print_r($objeto);
}
?>