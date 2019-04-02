<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function hello()
    {
        $name = 'Romeo';
        dump($name);
        return new Response(
            '<html><body>Hello Romeo</body></html>'
        );
    }
}