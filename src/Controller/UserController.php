<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Usuarios;
use App\Form\RegistrationFormType;

class UserController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/register", name="user_register")
     */
    public function register(Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new Usuarios();
        $form = $this->createForm(RegistrationFormType::class, $user);
        
        // Antes de procesar el formulario, inicializa el mensaje de éxito y error
        $successMessage = null;
        $errorMessage = null;

        // Procesar el formulario
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $user->setPassword(
                    $passwordHasher->hashPassword($user, $user->getPlainPassword())
                );
                $user->setRoles(['ROLE_USER']);

                $this->entityManager->persist($user);
                $this->entityManager->flush();

                // Mensaje de éxito
                $successMessage = '¡Registro exitoso! Ahora puedes iniciar sesión.';
                // Redirigir al usuario después del registro
                return $this->redirectToRoute('app_login');
            } catch (\Exception $e) {
                // Manejar excepciones al intentar guardar el usuario en la base de datos
                $errorMessage = 'Error al procesar el registro. Por favor, inténtalo de nuevo.';
            }
        }

        return $this->render('user/index.html.twig', [
            'registrationForm' => $form->createView(),
            'successMessage' => $successMessage,
            'errorMessage' => $errorMessage,
        ]);
    }
}
