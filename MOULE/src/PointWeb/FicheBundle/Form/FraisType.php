<?php

namespace PointWeb\FicheBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FraisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('qtNuit')
            ->add('qtRepas')
            ->add('qtKm')
            ->add('prixNuit')
            ->add('prixRepas')
            ->add('prixKm')
            ->add('totalNuit')
            ->add('totalRepas')
            ->add('totalKm')
            ->add('total')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PointWeb\FicheBundle\Entity\Frais'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pointweb_fichebundle_frais';
    }
}
