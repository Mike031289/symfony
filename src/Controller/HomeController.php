<?php
//Dans ce fichier on va créer toutes les fonction de notre class (notre objet)
    //app signifie src qui signifient le chemin où ce  fichier est stocker(chemin du dossier parent du fichier)
namespace App\Controller;
    //On va utiliser le composant Response (composant = Classe) qui est dans le namespace namespace App\Controller
    //Response nous permet de créer un objet que l'on peut afficher sur une page web et aussi d'afficher une page web
use Symfony\Component\HttpFoundation\Response;
    //On va créer la class
class HomeController{
     //On inject $twig qui va permettre d'utiliser un template. twig a été instancié sur le serveur au demarrage de l'application et prêt à l'emploi. (c'est l'injection de dépendance)
        /**
         * @var Environment
         */
        private $twig;
        public function __construct($twig){
            $this->twig=$twig;
        }

    public function index(): Response{

        return new Response($this->twig->render('pages/home.html.twig'));
    }
}
    
