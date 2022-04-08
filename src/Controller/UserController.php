<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Platform;
use App\Entity\UserPlatform;
use App\Form\UserType;
use App\Form\UserPlatformType;
use App\Services\Utilities;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    public function __construct(Utilities       $utilities)
    {
        $this->utilities = $utilities;
    }

    #[Route('/account', name: 'app_account')]
    public function account(EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $this->getUser();
        $userPlatforms = $user->getUserPlatforms();
        $userPlatformForm = new UserPlatform();
        $form = $this->createForm(UserPlatformType::class, $userPlatformForm);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $id = $request->request->get('user_platform')['editId'];
            if ($id == null) { 
                $iv = $this->utilities->generateRandomString(); 
                $userPlatformForm->setVector($iv);
                $userPlatformForm->setUser($user);
            }
            else {
                $platformRepository = $this->getDoctrine()->getRepository(userPlatform::class);
                $userPlatformForm = $platformRepository->find($id);
                $iv = $userPlatformForm->getVector();
            }
            if (!empty($userPlatformForm->getPublicKey())) 
                { $public_crypt = openssl_encrypt($userPlatformForm->getPublicKey(), "aes-256-cbc-hmac-sha256" ,$_ENV['APP_SECRET'], 0, $iv); $userPlatformForm->setPublicKey($public_crypt); }
            if (!empty($userPlatformForm->getSecretKey())) 
                { $secret_crypt = openssl_encrypt($userPlatformForm->getSecretKey(), "aes-256-cbc-hmac-sha256" ,$_ENV['APP_SECRET'], 0, $iv); $userPlatformForm->setSecretKey($secret_crypt); }
            if (!empty($userPlatformForm->getAddress())) 
                { $address_crypt = openssl_encrypt($userPlatformForm->getAddress(), "aes-256-cbc-hmac-sha256" ,$_ENV['APP_SECRET'], 0, $iv); $userPlatformForm->setAddress($address_crypt); }
            if (!empty($userPlatformForm->getPassphrase())) 
                { $passphrase_crypt = openssl_encrypt($userPlatformForm->getPassphrase(), "aes-256-cbc-hmac-sha256" ,$_ENV['APP_SECRET'], 0, $iv); $userPlatformForm->setPassphrase($passphrase_crypt); }
            $entityManager->persist($userPlatformForm);
            $entityManager->flush();
            return $this->redirectToRoute('app_account');
        }
        $userForm = $this->createForm(UserType::class, $user);
        $userForm->handleRequest($request);
        if ($userForm->isSubmitted() && $userForm->isValid()) {
            $entityManager->persist($userForm);
            $entityManager->flush();
            return $this->redirectToRoute('app_account');
        }

        return $this->render('user/account.html.twig', [
            'userPlatforms' => $userPlatforms,
            'user' => $user,
            'userForm' => $userForm->createView(),
            'form' => $form->createView()
        ]);
    }

    #[Route('/account/get-platforms', name: 'app_account_get_platforms', methods: 'POST')]
    public function getPlatforms(EntityManagerInterface $entityManager, Request $request) : Response
    {
        $user = $this->getUser();
        $userPlatforms = $user->getUserPlatforms();
        $myPlatforms = array();
        foreach ($userPlatforms as $key => $value) {
            array_push($myPlatforms, array(
                "id" => $value->getId(),
                "platform" => array(
                    "id" => $value->getPlatform()->getId(),
                    "name" => $value->getPlatform()->getName(),
                    "image" => $value->getPlatform()->getImage()
                )
            ));
        }
        return new Response(json_encode($myPlatforms));
    }

    #[Route('/account/edit-platform', name: 'app_account_edit_platform', methods: 'POST')]
    public function editPlatform(EntityManagerInterface $entityManager, Request $request)
    {
        $id = $request->request->get('id');
        $platform = $this->getDoctrine()->getRepository(userPlatform::class);
        $platform = $platform->find($id);
        $entityManager->remove($platform);
        $entityManager->flush();
        return new Response(json_encode("Edit finalized"));
    }

    #[Route('/account/delete-platform', name: 'app_account_delete_platform', methods: 'POST')]
    public function deletePlatform(EntityManagerInterface $entityManager, Request $request)
    {
        $id = $request->request->get('id');
        $platform = $this->getDoctrine()->getRepository(userPlatform::class);
        $platform = $platform->find($id);
        $entityManager->remove($platform);
        $entityManager->flush();
        return new Response(json_encode("Delete finalized"));
    }
}
