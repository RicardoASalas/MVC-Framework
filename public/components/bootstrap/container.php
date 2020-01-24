
<?php
require __DIR__ . '/../../../vendor/autoload.php';


$containerBuilder = new \DI\ContainerBuilder;


$containerBuilder->useAutowiring(true);


// Kint::dump($containerBuilder);

// $containerBuilder->addDefinitions(__DIR__ . '/config.php');

$container = $containerBuilder->build();

return $container;



// $containerBuilder->addDefinitions(base_path('bootstrap/config.php'));

// $containerBuilder->useAutowiring(false);


