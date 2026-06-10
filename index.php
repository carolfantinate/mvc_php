<?php

require_once 'Model.php';
require_once 'View.php';
require_once 'Controller.php';


//Criar instâncias
$model = new Model();
$controller = new Controller($model);
$view = new View($model);

//verifica a ação e executa
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'somar':
            $controller->somar();
            break;
        case 'subtrair':
            $controller->subtrair();
            break;
        case 'multiplicar':
            $multiplicar->multiplicar();
            break;
        case 'dividir':
            $controller->dividir();
            break;
    }
}

//exibe na tela
echo $view->output();