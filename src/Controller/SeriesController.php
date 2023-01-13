<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SeriesController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('series/index.html.twig', [
            'title' => 'Hello, Word!',
        ]);
    }
}