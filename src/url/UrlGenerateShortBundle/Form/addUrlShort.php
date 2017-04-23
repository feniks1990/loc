<?php

namespace url\UrlGenerateShortBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class addUrlShort extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

    }


    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'url_url_generate_short_bundleadd_url_short';
    }
}
