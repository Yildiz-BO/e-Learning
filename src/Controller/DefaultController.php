<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController 
{
    public function index()
        {
            var_dump('ca marche');
            die();
        }
        /**
         * @Route("/test/{age<\d+>?0}", name="test", methods={"GET" , "POST"}, schemes={"https"})
         */
    public function test(Request $request , $age)
    {
        //$request = Request::createFromGlobals();
        //$age = $request->attributes->get('age');

        return new Response("vous avez $age ans !");
       
      
    }
}