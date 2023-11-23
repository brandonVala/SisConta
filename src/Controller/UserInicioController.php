<?php
// UserInicioController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserInicioController extends AbstractController
{
    #[Route('/user/inicio', name: 'app_user_inicio')]
    public function inicio(): Response
    {
        return $this->render('user/usuario_inicio.html.twig', [
            'controller_name' => 'UserInicioController',
        ]);
    }
}

