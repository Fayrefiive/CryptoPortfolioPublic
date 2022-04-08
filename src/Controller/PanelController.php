<?php

namespace App\Controller;

use App\Entity\Platform;
use App\Services\Utilities;
use App\Entity\UserPlatform;
use App\Form\UserPlatformType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PanelController extends AbstractController
{
    public function __construct(Utilities $utilities)
    {
        $this->utilities = $utilities;
    }

    /**
     * @Route("/portfolio/{assets}", name="app_portfolio", defaults={"assets" = null})
     */
    public function portfolio(string $assets = null, EntityManagerInterface $entityManager, Request $request): Response
    {
        switch ($assets) {
            case 'cryptos':
                $user = $this->getUser();
                $repository = $this->getDoctrine()->getRepository(Platform::class);
                $platforms = $repository->findAll();
                $userPlatforms = $user->getUserPlatforms();
                $userPlatformForm = new UserPlatform();
                $form = $this->createForm(UserPlatformType::class, $userPlatformForm);

                $form->handleRequest($request);
                if ($form->isSubmitted() && $form->isValid()) {
                    $iv = $this->utilities->generateRandomString();
                    if (!empty($userPlatformForm->getPublicKey())) 
                        { $public_crypt = openssl_encrypt($userPlatformForm->getPublicKey(), "aes-256-cbc-hmac-sha256" ,$_ENV['APP_SECRET'], 0, $iv); $userPlatformForm->setPublicKey($public_crypt); }
                    if (!empty($userPlatformForm->getSecretKey())) 
                        { $secret_crypt = openssl_encrypt($userPlatformForm->getSecretKey(), "aes-256-cbc-hmac-sha256" ,$_ENV['APP_SECRET'], 0, $iv); $userPlatformForm->setSecretKey($secret_crypt); }
                    if (!empty($userPlatformForm->getAddress())) 
                        { $address_crypt = openssl_encrypt($userPlatformForm->getAddress(), "aes-256-cbc-hmac-sha256" ,$_ENV['APP_SECRET'], 0, $iv); $userPlatformForm->setAddress($address_crypt); }
                    if (!empty($userPlatformForm->getPassphrase())) 
                        { $passphrase_crypt = openssl_encrypt($userPlatformForm->getPassphrase(), "aes-256-cbc-hmac-sha256" ,$_ENV['APP_SECRET'], 0, $iv); $userPlatformForm->setPassphrase($passphrase_crypt); }
                    $userPlatformForm->setUser($user);
                    $userPlatformForm->setVector($iv);

                    $entityManager->persist($userPlatformForm);
                    $entityManager->flush();
                    return $this->redirectToRoute('app_portfolio', array('assets' => 'cryptos'));
                }
                return $this->render('panel/cryptos.html.twig', [
                    'userPlatforms' => $userPlatforms,
                    'platforms' => $platforms,
                    'form' => $form->createView()
                ]);
                break;
            case 'actions':
                // return $this->render('panel/actions.html.twig', []);
                break;
        }
        return $this->render('panel/portfolio.html.twig', []);
    }
}

