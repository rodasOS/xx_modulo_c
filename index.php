<?php
  
  $METHOD = $_SERVER['REQUEST_METHOD'];
  $URL = $_SERVER['REQUEST_URI'];

  $host = 'localhost';
  $username = 'root';
  $password = 'root';
  $database = 'modulo_c';

  $connection = new mysqli($host, $username, $password, $database);

  if ($connection->connect_error){
    echo 'No se pudo conectar a la base de datos';
    exit;
  }

switch($METHOD){

  case 'GET':
    echo 'Hiciste un get';
    if ($URL === '/XX_module_c/game'){
      header('Content-Type: application/json');

      //Eliminamos los paraetros query de la URL
      $URL = strtok($URL, '?');

      //Separamos la URL en un array
      $parts = explode('/', $URL);

      array_shift($parts);

      $controlador = isset($parts[0]) ? $parts[0] : '';
      $parametro = isset($parts[1]) ? $parts[1] : '';



      print_r($controlador);
      print_r($parametro);
    }
  break;

  case 'POST':
    echo 'hiciste un POST';
  break;
  
}