<?php

    function render(string $path, array $variables= []) {
        //Extract de tout les variables dans le tableau $variables
        extract($variables);
        //--------------------------------------------------------
        ob_start();
        require('src/View/'.$path.'.html.php');
        $content=ob_get_clean();
        require('src/View/base.html.php');
    }