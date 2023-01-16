<?php
namespace App\Controller;

use App\Entity\Series;
use App\Repository\SeriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class SeriesController extends AbstractController
{

    #[Route('/', name: 'homepage')]
    public function index(Environment $twig, SeriesRepository $seriesRepository): Response
    {
        return new Response($twig->render('series/index.html.twig', [
            'seriess' => $seriesRepository->findAll(),
        ]));


    }

    #[Route('/series/{id}', name: 'series')]
    public function show(Environment $twig, Series $series): Response
    {
        return new Response($twig->render('series/show.html.twig', [
            'series' => $series
        ]));
    }

}