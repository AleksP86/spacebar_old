<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Article;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function index()
    {
    	$stories=$this->getDoctrine()->getREpository(Article::class)->findAllStories();

    	//dump($stories);
    	
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'WelcomeController',
            'articles'=>$stories
        ]);
    }
}
