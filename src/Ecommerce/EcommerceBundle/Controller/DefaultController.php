<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Entity\Test;
use Ecommerce\EcommerceBundle\Form\TestType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Form\testformType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DefaultController extends Controller
{
    public function testformulaireAction()
    {
        $p=new Test();

//$form= $this->createFormBuilder($p)->getForm(); $form = $this->createForm(TaskType::class, $task);
      //  $form = $this->createForm(TestType::class,$p);
        $form = $this->createForm(TestType::class, null);
      ///  $form = $this->createForm( TestType);


        return $this->render('@EcommerceEcommerce/test/test.html.twig',array('form'=>$form->createView()));
    }
}
