<?php
    namespace App\DiDwaEnterprise;


    class DefaultController extends Controller
    {
        public function landingPage() {
            echo $this->twig->render("home.html.twig", ["alias" => "Keys"]);
        }

        public function errorPage() {
            echo $this->twig->render("404.html.twig");
        }
    }