<?php
    declare(strict_types = 1);

    namespace App\DiDwaEnterprise;
    use Phroute\Phroute\Dispatcher;
    
    class Application
    {
        private static ?Application $instance = NULL;
        private Dispatcher $applicationRouter;

        //Singleton design pattern: Make sure only a single instance of the application is created
        private function __construct() {
            $this->applicationRouter = (new ApplicationRouter())->getDispatcher();
        }

        public static function getInstance(): Application {
            if(self::$instance == NULL) {
                self::$instance = new Application();
            }
            return self::$instance;
        }

        public function run(): void {
            $requestMethod = $_SERVER['REQUEST_METHOD'];
            $requestUri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
            $response = $this->applicationRouter->dispatch($requestMethod, $requestUri);
            echo $response;
        }
    }