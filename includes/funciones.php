<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

// Revisa que el usuario este auntenticado

function isAuth() : void {
    if(!isset($_SESSION['logueado'])){
        header('Location: /');
    }
}

// Revisa que el usuario sea admin

function isAdmin() : void{
    if(!isset($_SESSION['admin'])){
        header('Location: /');
    }
}

function esUltimo(string $actual, string $proximo) : bool{
    if($actual !== $proximo){
        return true;
    }
    return false;
}

