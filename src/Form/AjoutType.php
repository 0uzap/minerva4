<?php

namespace App\Form;

use App\Entity\Livre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Type;
use App\Entity\Genre;


class AjoutType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Titre', TextType::class, ['attr' => ['class'=> 'form-control'], 'label_attr' => ['class'=> 'fw-bold']])
            ->add('Auteur', TextType::class, ['attr' => ['class'=> 'form-control'], 'label_attr' => ['class'=> 'fw-bold']])
            ->add('Prix', TextType::class, ['attr' => ['class'=> 'form-control'], 'label_attr' => ['class'=> 'fw-bold']])
            ->add('DatePubli', DateType::class, ['label_attr' => ['class'=> 'fw-bold']])
            ->add('Format', TextType::class, ['attr' => ['class'=> 'form-control'], 'label_attr' => ['class'=> 'fw-bold']])
            ->add('Editeur', TextType::class, ['attr' => ['class'=> 'form-control'], 'label_attr' => ['class'=> 'fw-bold']])
            ->add('Langue', TextType::class, ['attr' => ['class'=> 'form-control'], 'label_attr' => ['class'=> 'fw-bold']])
            ->add('Genre', EntityType::class, [
                'class' => Genre::class,
                'choice_label' => 'nomGenre',
                'placeholder' => 'Choisir le genre du livre',
                'attr' => ['class'=> 'form-control'],
                'label_attr' => ['class'=> 'fw-bold']
            ])
  //          ->add('Couverture', TextType::class, ['attr' => ['class'=> 'form-control'], 'label_attr' => ['class'=> 'fw-bold']])
            ->add('Type', EntityType::class, [
                'class' => Type::class,
                'choice_label' => 'nomType',
                'placeholder' => 'Choisir le type du livre',
                'attr' => ['class'=> 'form-control'],
                'label_attr' => ['class'=> 'fw-bold']
            ])
            ->add('Resume', TextareaType::class, ['attr' => ['class'=> 'form-control', 'rows'=>'7', 'cols' => '7'], 'label_attr' => ['class'=> 'fw-bold']])
            ->add('Couverture', FileType::class, array('label' => 'Fichier à télécharger'))
            ->add('ajouter', SubmitType::class, ['attr' => ['class'=> 'btn envoyer text-white m-4' ], 'row_attr' => ['class' => 'text-center'],])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livre::class,
        ]);
    }
}
