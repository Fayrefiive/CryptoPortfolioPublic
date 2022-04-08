<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\Cryptos\SubscanAPI;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function __construct(SubscanAPI $subscan)
    {
        $this->subscan = $subscan;
    }

    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        $securityContext = $this->container->get('security.authorization_checker');
        if ($securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->render('panel/home.html.twig', []);
        } 
        else {
            return $this->render('home/index.html.twig', []);
        }
    }

    /**
     * @Route("/help", name="app_help")
     */
    public function help()
    {
        $securityContext = $this->container->get('security.authorization_checker');
        if ($securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->render('panel/help.html.twig', []);
        }
            return $this->render('home/help.html.twig', []);
    }

    /**
     * @Route("/legal-notice", name="app_legal_notice")
     */
    public function legalNotice()
    {
        return $this->render('legal/legal-notice.html.twig', []);
    }

    /**
     * @Route("/lexicon", name="app_lexicon")
     */
    public function lexicon()
    {
        return $this->render('home/lexicon.html.twig', []);
    }
}

