<?php

namespace PlantBundle\Controller;

use PlantBundle\Entity\Plant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Tests\Fixtures\Type;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;


/**
 * Plant controller.
 *
 */
class PlantController extends Controller
{
    /**
     * Lists all plant entities.
     *
     */

    public function smartSearchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $entities =  $em->getRepository('PlantBundle:Plant')->findAllByPlantName($requestString);
        if(!$entities) {
            $result['entities']['error'] = "no result";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }

        return new Response(json_encode($result));
    }
    public function getRealEntities($entities){
        foreach ($entities as $entity){
            $realEntities[$entity->getId()] = $entity->getPlantname();
        }
        return $realEntities;
    }


    public function searchAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->setMethod('GET')
            ->add('plantname', TextType::class,array('label'=>' '))
            ->getForm();
        $form->handleRequest($request);
        //echo gettype($form['plantname']->getData()) . $form['plantname']->getData();
        $em = $this->getDoctrine()->getManager();
        if($form->isSubmitted()){
            $plantname=$form['plantname']->getData();
            $plants = $em->getRepository('PlantBundle:Plant')->findAllByPlantName($plantname);
        }
        else{
            $plants = $em->getRepository('PlantBundle:Plant')->findAllOrderedByName();
        }
        $paginator=$this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $plants,
            $request->query->getInt('page', 1), /*page number*/
            $request->query->getInt('limit', 5) /*limit per page*/
        );
        return $this->render('@Plant/plant/index.html.twig', array(
            'form' => $form->createView(),
            'plants' => $pagination
        ));
    }


    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $plants = $em->getRepository('PlantBundle:Plant')->findAllOrderedByName();
        $paginator=$this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $plants,
            $request->query->getInt('page', 1), /*page number*/
            $request->query->getInt('limit', 5) /*limit per page*/
        );
        return $this->render('@Plant/plant/index2.html.twig', array(
            'plants' => $pagination
        ));
    }

    /**
     * Creates a new plant entity.
     *
     */
    public function newAction(Request $request)
    {
        $plant = new Plant();
        $form = $this->createForm('PlantBundle\Form\PlantType', $plant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /**
             * @var UploadedFile $file
             */
            $file=$plant->getPhoto();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'),$fileName
            );
            $plant->setPhoto($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($plant);
            $em->flush();

            return $this->redirectToRoute('plant_show', array('id' => $plant->getId()));
        }

        return $this->render('@Plant/plant/new.html.twig', array(
            'plant' => $plant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a plant entity.
     *
     */
    public function showAction(Plant $plant)
    {
        $deleteForm = $this->createDeleteForm($plant);

        return $this->render('@Plant/plant/show.html.twig', array(
            'plant' => $plant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing plant entity.
     *
     */
    public function editAction(Request $request, Plant $plant)
    {
        $deleteForm = $this->createDeleteForm($plant);
        $editForm = $this->createForm('PlantBundle\Form\PlantType', $plant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            /**
             * @var UploadedFile $file
             */
            $file=$plant->getPhoto();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'),$fileName
            );

            $plant->setPhoto($fileName);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('plant_show', array('id' => $plant->getId()));
        }

        return $this->render('@Plant/plant/edit.html.twig', array(
            'plant' => $plant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a plant entity.
     *
     */
    public function deleteAction(Request $request, Plant $plant)
    {
        $form = $this->createDeleteForm($plant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($plant);
            $em->flush();
        }

        return $this->redirectToRoute('plant_index');
    }

    /**
     * Creates a form to delete a plant entity.
     *
     * @param Plant $plant The plant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Plant $plant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('plant_delete', array('id' => $plant->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
