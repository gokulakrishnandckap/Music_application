<?php
    require_once "core/guestmiddleware.php";
    require_once "core/Authmiddleware.php";

    class routers
    {
        public $routes=[];
        public $guest;

        public function AuthorCheck($middleware)
        {
            $this->routes[count($this->routes) - 1]['middleware'] = $middleware;
        }


    
        public function get($uri,$controller)
        {
            $this->routes[]=[
                'uri'=>$uri,
                'controller'=>$controller,
                'method'=>'GET',
                'middleware'=>null,

    
            ];
            return $this;
   
        }
        public function post($uri,$controller)
        {
            $this->routes[]=[
                'uri'=>$uri,
                'controller'=>$controller,
                'method'=>'POST',
                'middleware'=>null,

    
            ];
            return $this;
   
        }

        public function checking()
        {
            $value;
            foreach ($this->routes as $router)
            {
                if($router['uri'] == $_SERVER['REQUEST_URI'])
                {
                    if($router['uri'] == $_SERVER['REQUEST_URI'])
                {
                    if ($router['middleware'] === 'authentication') 
                    {
                        $routing = new Auths();

                        $routing->handle();
                    }
                    if ($router['middleware'] === 'guest') 
                    {
                        $routing = new guests();

                        $routing->handle();
                    }

                    $value = $router['controller'];
                }
            }

            }
            if($value)
            {
                return $value;
            }
            else
            {
                return "page is not found";
            }
        }

       
    }
