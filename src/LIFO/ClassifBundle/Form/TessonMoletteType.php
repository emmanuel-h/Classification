<?php

namespace LIFO\ClassifBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TessonMoletteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('egal', ChoiceType::class, array(
            		'choices' 	=> array(
            				'egal'=>true,
            				'equi'=>false
            		),
            		'multiple'	=>false,
            		'expanded'	=>true,
		    		'required'	=> false
            ))
		    ->add('molette', MoletteType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LIFO\ClassifBundle\Entity\TessonMolette'
        ));
    }
}
