<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Currency;
use App\Entity\User;
use App\Entity\Platform;
use App\Form\CurrencyType;
use App\Form\UserType;
use App\Form\PlatformType;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        return $this->render('admin/index.html.twig', []);
    }

    #[Route('/admin/currency', name: 'app_admin_currency')]
    public function currency(EntityManagerInterface $entityManager, Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Currency::class);
        $currency = $repository->findAll();
        $CurrencyType = new Currency();
        $CurrencyForm = $this->createForm(CurrencyType::class, $CurrencyType);

        $CurrencyForm->handleRequest($request);
        if ($CurrencyForm->isSubmitted() && $CurrencyForm->isValid()) {
            $entityManager->persist($CurrencyType);
            $entityManager->flush();
        }
        return $this->render('admin/currency.html.twig', [
            'form' => $CurrencyForm->createView(),
            'currencys' => $currency
        ]);
    }

    #[Route('/admin/platforms', name: 'app_admin_platform')]
    public function platforms(EntityManagerInterface $entityManager, Request $request): Response
    {
        $PlatformType = new Platform();
        $PlatformForm = $this->createForm(PlatformType::class, $PlatformType);

        $PlatformForm->handleRequest($request);
        if ($PlatformForm->isSubmitted() && $PlatformForm->isValid()) {
            $directory = "/images/platforms/cryptos/";
            $filename = strtolower($PlatformForm['name']);
            $file = $form['image']->getData();
            $file->move($directory, $filename);

            $entityManager->persist($PlatformType);
            $entityManager->flush();
        }
        return $this->render('admin/platform.html.twig', [
            'form' => $PlatformForm->createView()
        ]);
    }

    #[Route('/admin/users', name: 'app_admin_user')]
    public function users(EntityManagerInterface $entityManager, Request $request): Response
    {
        $UserType = new User();
        $UserForm = $this->createForm(UserType::class, $UserType);

        $UserForm->handleRequest($request);
        if ($UserForm->isSubmitted() && $UserForm->isValid()) {
            $entityManager->persist($UserType);
            $entityManager->flush();
        }
        return $this->render('admin/user.html.twig', [
            'form' => $UserForm->createView()
        ]);
    }

    #[Route('/admin/logs', name: 'app_admin_logs')]
    public function logs(EntityManagerInterface $entityManager, Request $request): Response
    {
        return $this->render('admin/logs.html.twig', []);
    }
}
