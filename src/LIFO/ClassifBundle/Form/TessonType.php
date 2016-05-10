<?php

namespace LIFO\ClassifBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TessonType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('anneeDecouverte', IntegerType::class)
            ->add('developpe', ChoiceType::class, array(
			    'choices'  => array(
				        'Complet' => "Complet",
				        'Incomplet' => "Incomplet",
				        'Restitué' => "Restitué",
			    		'Aucun' => NULL
			    )))
            ->add('lotIndividu', ChoiceType::class, array(
            		'choices' => array(
            				'Lot' => "LOT",
            				'Individu' => "INDIVIDU"
            		)))
            ->add('numTombe', IntegerType::class, array('required' => false))
            ->add('fait', IntegerType::class, array('required' => false))
            ->add('largeur', NumberType::class)
            ->add('longueur', NumberType::class)
            ->add('ordreLargeur', ChoiceType::class, array(
			    'choices'  => array(
				        '=' => "=",
				        '<=' => "<=",
				        '<' => "<",
			    		'>=' => ">=",
			    		'>' => ">"
			    )))
            ->add('ordreLongueur', ChoiceType::class, array(
			    'choices'  => array(
				        '=' => "=",
				        '<=' => "<=",
				        '<' => "<",
			    		'>=' => ">=",
			    		'>' => ">"
			    )))
            ->add('commentaire', TextareaType::class)
            ->add('nombreMotifsVerticaux', IntegerType::class)
            ->add('ordreMotifsVerticaux', ChoiceType::class, array(
			    'choices'  => array(
				        '=' => "=",
				        '<=' => "<=",
				        '<' => "<",
			    		'>=' => ">=",
			    		'>' => ">"
			    )))
            ->add('nombreMotifsHorizontaux', IntegerType::class)
            ->add('ordreMotifsHorizontaux', ChoiceType::class, array(
			    'choices'  => array(
				        '=' => "=",
				        '<=' => "<=",
				        '<' => "<",
			    		'>=' => ">=",
			    		'>' => ">"
			    )))
			->add('US', USType::class)
			->add('site', SiteType::class)
			->add('numIsolation', IntegerType::class)
            ->add('save', SubmitType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LIFO\ClassifBundle\Entity\Tesson'
        ));
    }
}
