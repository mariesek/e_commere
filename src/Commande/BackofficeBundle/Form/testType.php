<?php


namespace Commande\BackofficeBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class testType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {

      $builder
          ->add('email','email')
          ->add('Nom')
          ->add('prenom')
          ->add('sexe','choice', array('choices' =>array('0' =>'homme',
                                                                     '1' => 'femme',
                                                                     '2' =>'autre',
                                                                     'preferred_choices' => array('1','2'),'expanded' =>false)))
          ->add('commercial','entity', array('class' => 'Commande\BackofficeBundle\Entity\Commercial'))
          ->add('contenu', 'textarea')
          ->add('date',"date")
          ->add('envoyer','submit');

  }

  public function getName()
  {
      return 'commande_backofficebundle_test';

  }
}