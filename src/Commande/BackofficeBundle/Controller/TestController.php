<?php


namespace Commande\BackofficeBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Commande\BackofficeBundle\Form\testType;


class TestController extends Controller
{
    public function testFormulaireAction()
    {
        $form = $this->createForm(new testType());

        return $this->render('BackofficeBundle:Default:test.html.twig', array('form' => $form->createView()));

    }






}
