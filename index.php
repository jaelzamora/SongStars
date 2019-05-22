<?php

//Start session
session_start();

// Include Config
require('config.php');

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

/**
 * Esto déjalo por si acaso... aunque no debería de hacerte falta para nada con la función que te he cargado ok
 */
// require('controllers/home.php');
// require('controllers/shares.php');
// require('controllers/users.php');

spl_autoload_register(function ($class) {
	require('controllers/' . $class . '.php');
});

/**
 * Array con todos los modelos de la aplicación
 */
$modelos = ['home', 'share', 'user', 'song'];

foreach ($modelos as $model) {
	require('models/' . $model . '.php');
}

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if ($controller) {
	$controller->executeAction();
}

/**
 * GUarda y prueba
 * * GUarda y prueba
 * increible vava
 * OK
 * una cosa si quiero listar canciones al darle click a un boton quye enlace va? como que listar canciones??¿? o sea a ver
 * ven bonito
 * No te preocupes por la función spl_autoload_register, yo la he descubierto hace unas semanas, pero es DIOS me gusta
 */
