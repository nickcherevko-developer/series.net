<?php

namespace App\Controller\Admin;

use App\Entity\Series;
use App\Entity\SeriesChanel;
use App\Form\SeriesType;
use App\Repository\SeriesRepository;
use App\Repository\ChanelRepository;
use App\Repository\SeriesChanelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class DashboardController extends AbstractController
{
    #[Route('/', name: 'homepage_admin', methods: ['GET'])]
    public function index()
    {
        return $this->render('admin/panel/index.html.twig');
    }

}
