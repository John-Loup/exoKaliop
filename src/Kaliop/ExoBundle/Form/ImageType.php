<?php

namespace Kaliop\ExoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('url', "url")
            ->add('alt', "text")
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kaliop\ExoBundle\Entity\Image'
        ));
    }

    public function getBlockPrefix()
    {
        return 'kaliop_exobundle_image';
    }
}
