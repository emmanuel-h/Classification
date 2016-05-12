<?php

namespace LIFO\ClassifBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ChercherTessonType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ID', IntegerType::class)
            ->add('Valider', SubmitType::class)
        ;
    }

	public function getName()
	{
	    return 'hurricaneScript_annoncebundle_rechercheannonces';
	}
}
