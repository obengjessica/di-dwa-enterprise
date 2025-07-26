<?php
    namespace App\DiDwaEnterprise;

    use Twig\Loader\FilesystemLoader;
    use Twig\Environment;

    class Controller
    {
        const TEMPLATES_DIR = __DIR__ . "/../templates";

        protected Environment $twig;

        public function __construct() {
            $loader = new FilesystemLoader(Controller::TEMPLATES_DIR);
            $this->twig = new Environment($loader);
        }
    }