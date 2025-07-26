<?php
    declare(strict_type = 1);

    class Application
    {
        private static ?Application $instance = NULL;

        //Singleton design pattern: Make sure only a single instance of the application is created
        private function __construct() {}

        public function getInstance(): Application {
            if(self::$instance == NULL) {
                self::$instance;
            }
            return $this->instance;
        }

        
        public function run(): void {
            
        }
    }