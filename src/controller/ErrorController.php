<?php

namespace controller;

class ErrorController {

  public function error(): void
  {
    $params =[
        "title" => "Error",
        "module" => "error.php",
    ];
        // Faire le rendu de la vue "src/view/Template.php"
    \view\Template::render($params);
  }

}