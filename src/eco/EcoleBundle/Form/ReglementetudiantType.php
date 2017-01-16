<?php

namespace eco\EcoleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReglementetudiantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateReglement')
             ->add('modeReglement', 'choice', array('choices' => 
            array('Annee'=>'annee','semestre'=>array('Semestre1'=>'SEM 1','Semestre2'=>'SEM 2','Semestre3'=>'SEM 3'))),
            array('label' => 'mode reglement : '))
            ->add('montant')
            ->add('reference')
            ->add('idEtudiant','entity',array("class"=>"eco\EcoleBundle\Entity\Eleve","property"=>"id"))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eco\EcoleBundle\Entity\Reglementetudiant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'eco_ecolebundle_reglementetudiant';
    }
}
