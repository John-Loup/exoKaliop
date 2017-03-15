<?php

namespace Kaliop\ExoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("date",      "date")
            ->add("title",     "text")
            ->add("content",   "textarea")
            ->add("author",    "text")
            ->add("image",     new ImageType())
            ->add("confirm",   "submit")
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kaliop\ExoBundle\Entity\Article'
        ));
    }


    public function getBlockPrefix()
    {
        return 'kaliop_exobundle_article';
    }
}
