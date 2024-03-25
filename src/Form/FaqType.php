<?php

namespace App\Form;

use App\Entity\Faq;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\Security;

class FaqType extends AbstractType
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('question', TextType::class, [
            'attr' => ['class' => 'form-control'],
            'label_attr' => ['class' => 'fw-bold'],
        ])
            ->add('reponse', TextareaType::class, [
                'attr' => ['class' => 'form-control'],
                'label_attr' => ['class' => 'fw-bold'],
                'required' => false,
                'disabled' => !$this->security->isGranted('ROLE_ADMIN'), // Le champ reponse est désactivé pour les non-administrateurs
            ])
            ->add('envoyer', SubmitType::class, [
                'attr' => ['class' => 'btn envoyer text-white m-4'],
                'row_attr' => ['class' => 'text-center'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Faq::class,
        ]);
    }
}
