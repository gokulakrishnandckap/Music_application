<?php


    class routers
    {
        public $routes=[];

    
        public function get($uri,$controller)
        {
            $this->routes[]=[
                'uri'=>$uri,
                'controller'=>$controller,
                'method'=>'GET',

    
            ];
   
        }
        public function post($uri,$controller)
        {
            $this->routes[]=[
                'uri'=>$uri,
                'controller'=>$controller,
                'method'=>'POST',

    
            ];
   
        }

        public function checking()
        {
            $value;
            foreach ($this->routes as $router)
            {
                if($router['uri'] == $_SERVER['REQUEST_URI'])
                {

                    $value = $router['controller'];
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
