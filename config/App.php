<?php

    require_once('src/Controller/indexController.php');
    require_once('src/Controller/DepenseController.php');
    require_once('src/Controller/ListeController.php');
    class App
    {

        public static function control() 
        {
           
            //Par défaut si l'url n'a pas de paramètre
            $controllerName= "IndexController";
            $task="showAll";
            //Si controller dans l'url n'est pas vide
            if(!empty($_GET['controller'])) {
                $controllerName = ucfirst($_GET['controller']);
            }
            //Si tache dans l'url n'est pas vide
            if(!empty($_GET['task'])) {
                $task= $_GET['task'];
            }
            //instanciation de la class
            $controller = new $controllerName();
            //Appel à la fonction dans la class
            $controller->$task();

        }
    }