<?php
    declare(strict_types=1);

    namespace App\DiDwaEnterprise;

    use Phroute\Phroute\RouteCollector;
    use Phroute\Phroute\Dispatcher;

    class ApplicationRouter
    {
        private Dispatcher $dispatcher;

        public function __construct() {
            $router = new RouteCollector();
            
            $router->get("/", function() {
                echo "This is the homepage";
            });

            $router->get("/product/{id}", function($id) {
                echo "This is the product page for product $id";
            });

            $this->dispatcher = new Dispatcher($router->getData());
        }

        public function getDispatcher(): Dispatcher {
            return $this->dispatcher;
        }
    }