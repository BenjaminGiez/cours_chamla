<?php

function render(string $path, array $variables = []){
    $pageTitle = $article['title'];
    ob_start();
    require('templates/' . $path . '.html.php');
    $pageContent = ob_get_clean();
    
    require('templates/layout.html.php') ;
}