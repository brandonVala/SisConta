<?php
// src/Form/RegistrationFormType.php
namespace App\Form;

use App\Entity\Usuarios;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 2, 'max' => 255]),
                ],
            ])
            ->add('app', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 2, 'max' => 255]),
                ],
            ])
            ->add('apm', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 2, 'max' => 255]),
                ],
            ])
            ->add('tel', TelType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 10, 'max' => 15]),
                ],
            ])
            ->add('email', EmailType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Length(['max' => 255]),
                ],
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => [
                    'label' => 'Contraseña',
                ],
                'second_options' => [
                    'label' => 'Repetir Contraseña',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 8]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Usuarios::class,
        ]);
    }
}
