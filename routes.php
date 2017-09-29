<?php
function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
        case 'pages':
            $controller = new PagesController();
            break;

        case 'tasks':

            require_once('models/task.php');
            $controller = new TasksController();
            break;
        case 'users':

            require_once('models/task.php');
            require_once('models/user.php');
            $controller = new UsersController();
            break;
    }

    $controller->{ $action }();
}


$controllers = array('pages' => ['home', 'error'],
    'users' => ['login'],
    'tasks' => ['index', 'show','create','edit']);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}