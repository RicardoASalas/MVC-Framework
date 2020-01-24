<?php
use Application\Controllers\HomeController;
use Application\Controllers\ContactController;
return [

  HomeController::class => function(){
      return new HomeController;
  },
  ContactController::class => function() {
  return new ContactController;
  }
];
return [
  'config.database' => function() {
    return parse_ini_file(base_path('app/Config/database.ini'));
  },
  HomeController::class => function() {
    return new HomeController;
  },
  ContactController::class => function() {
    return new ContactController;
  }
];
