<?php

namespace Blog\BlogBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, ['label'=>'Titre'])
            ->add('text', TextareaType::class, ['label'=>'Texte', 'attr'=>['row' => '9']])
            //->add('createdAt', DateType::class, ['label'=>'Date de création', 'widget' => 'single_text'])
            ->add('author', EntityType::class, ['class'=>'Blog\BlogBundle\Entity\Author',
                                                 'placeholder'=>'Choisir un auteur',
                                                 'choice_label' => 'firstName',
                                                 'multiple' => false ,
                                                  'expanded' => true
            ])
            ->add('sumit', SubmitType::class, ['label'=>'valider','attr'=>['class'=>'btn btn-primary btn-block']]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blog\BlogBundle\Entity\Article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'blog_blogbundle_article';
    }


}
