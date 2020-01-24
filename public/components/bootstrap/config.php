<?php
use Application\Controllers\HomeController;

return [

  HomeController::Class => function(){
      return new HomeController;
  }
];