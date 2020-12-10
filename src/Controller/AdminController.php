<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AdminController extends AbstractController
{
    /**
     * @Route ("/", name="homepage")
     */
    public function homepageAction(){
//        return new response("<h1>Welkom<h1>");
        return $this->render('admin/homepage.html.twig');
    }

}