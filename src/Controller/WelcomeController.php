<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function hello()
    {
        $name = 'Romeo';

        dump($name);

        return $this->render('Welcome/hello.html.twig', [
            'name' => $name
        ]);

    }
}