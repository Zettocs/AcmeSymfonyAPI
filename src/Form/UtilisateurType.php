<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', TextType::class, [
                'label' => 'Email',
                'required' => false,
                'constraints' => [
                    new Callback([$this, 'validateEmail'])
                ]
            ])
            ->add('username', TextType::class, [
                'label' => 'Nom d\'utilisateur',
                'required' => false,
                'constraints' => [
                    new Callback([$this, 'validateUsername'])
                ]
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'required' => false
            ])
            ->add('adresse', TextType::class, [
                'label' => 'Adresse',
                'required' => false
            ])
            ->add('ville', TextType::class, [
                'label' => 'Ville',
                'required' => false
            ])
            ->add('pays', TextType::class, [
                'label' => 'Pays',
                'required' => false
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe ne correspondent pas',
                'required' => true,
                'first_options' => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Répéter le mot de passe']
            ])
            ->add('passwordVerification', PasswordType::class, [
                'label' => 'Répéter le mot de passe',
                'mapped' => false,
                'constraints' => [
                    new Callback([$this, 'validatePassword']),
                ],
            ])
            ->add('Enregistrer', SubmitType::class);

            if (isset($options['data']) && !empty($options['data']->getEmail())) {
                $builder->add('email', TextType::class, [
                    'label' => 'Email',
                    'required' => false
                ]);
            }
        
            if (isset($options['data']) && !empty($options['data']->getUsername())) {
                $builder->add('username', TextType::class, [
                    'label' => 'Nom d\'utilisateur',
                    'required' => false
                ]);
            }
        
            if (isset($options['data']) && !empty($options['data']->getFirstname())) {
                $builder->add('firstname', TextType::class, [
                    'label' => 'Prénom',
                    'required' => false
                ]);
            }
        
            if (isset($options['data']) && !empty($options['data']->getAdresse())) {
                $builder->add('adresse', TextType::class, [
                    'label' => 'Adresse',
                    'required' => false
                ]);
            }
        
            if (isset($options['data']) && !empty($options['data']->getVille())) {
                $builder->add('ville', TextType::class, [
                    'label' => 'Ville',
                    'required' => false
                ]);
            }
        
            if (isset($options['data']) && !empty($options['data']->getPays())) {
                $builder->add('pays', TextType::class, [
                    'label' => 'Pays',
                    'required' => false
                ]);
            }  
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }

    public function validatePassword($value, ExecutionContextInterface $context)
    {
        $user = $context->getRoot()->getData();
        if ($user->getPassword() !== $value) {
            $context->buildViolation('Les mots de passe ne correspondent pas')
                ->atPath('passwordVerification')
                ->addViolation();
        }
    }

    public function validateEmail($value, ExecutionContextInterface $context)
    {
        $formData = $context->getRoot()->getData();
        if (!$formData->getEmail()) {
            return;
        }

        $context->buildViolation('This value should not be blank.')
            ->atPath('email')
            ->addViolation();
    }

    public function validateUsername($value, ExecutionContextInterface $context)
    {
        $formData = $context->getRoot()->getData();
        if (!isset($formData['username']) || empty($formData['username'])) {
            return;
    }

        $context->buildViolation('This value should not be blank.')
            ->atPath('username')
            ->addViolation();
    }
}
