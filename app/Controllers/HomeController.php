<?php
    namespace Application\Controllers;
    use Application\Providers\Doctrine;
    use Application\Models\Entities\User;
    use Application\Providers\View;

        class HomeController{

            protected $doctrine;
            //utilizamos un constructor para tener disponible $doctrine en el controlador:
            public function __construct(Doctrine $doctrine)
            {
                $this->doctrine = $doctrine;
            }
            public function index (View $view) {
                echo $view->render('home.twig');
            }

           // public function index(){
                //Mostrar datos de un usuario de la base de datos:

//                echo ('
//                <link rel="stylesheet" href="./components/bootstrap/dist/css/bootstrap.css">
//                <nav class="navbar navbar-expand-lg navbar-light bg-light">
//                <a class="navbar-brand" href="/">PHP Framework</a>
//                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" ariaexpanded="false" aria-label="Toggle navigation">
//                                <span class="navbar-toggler-icon"></span>
//                                </button>
//                                <div class="collapse navbar-collapse" id="navbarNav">
//                                <ul class="navbar-nav">
//                                <li class="nav-item active">
//                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
//                                </li>
//                                <li class="nav-item">
//                                <a class="nav-link" href="/contacto">Contacto</a>
//                                </li>
//                                </ul>
//                                </div>
//                                </nav>    ');
//
//                                echo ('<h1>Bienvenid@</h1>');
//
//                                \Kint::dump($this->doctrine);
//
//                                $user = $this->doctrine->em->getRepository(User::class)->find(2);
//
//                                \Kint::dump($user);
//
//            }
            public function hola (string $nombre, View $view) {
                echo $view->render('hola.twig', compact('nombre'));
                //echo $view->render('hola.twig', ['nombre', $nombre]);
            }

        }



