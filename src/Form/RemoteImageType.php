<?php

namespace App\Form;

use App\Entity\RemoteImage;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Tetranz\Select2EntityBundle\Form\Type\Select2EntityType;

/**
 * RemoteImage form.
 */
class RemoteImageType extends AbstractType {

    /**
     * Add form fields to $builder.
     *
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
                                    $builder->add('url', TextType::class, array(
                    'label' => 'Url',
                    'required' => true,
                    'attr' => array(
                        'help_block' => '',
                    ),
                ));
                                        $builder->add('title', TextType::class, array(
                    'label' => 'Title',
                    'required' => true,
                    'attr' => array(
                        'help_block' => '',
                    ),
                ));
                                        $builder->add('description', TextareaType::class, array(
                    'label' => 'Description',
                    'required' => true,
                    'attr' => array(
                        'help_block' => '',
                        'class' => 'tinymce',
                    ),
                ));
            
    }

    /**
     * Define options for the form.
     *
     * Set default, optional, and required options passed to the
     * buildForm() method via the $options parameter.
     *
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => RemoteImage::class
        ));
    }

}
