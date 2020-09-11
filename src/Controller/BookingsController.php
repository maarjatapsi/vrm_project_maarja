<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookingsController extends AbstractController
{
    /**
     * @Route("/bookings")
     */
    public function Bookings(): Response
    {
        return $this->render('/bookings.html.twig');
    }
}