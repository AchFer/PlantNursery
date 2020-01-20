<?php

namespace PlantBundle\Controller;

use PlantBundle\Entity\Userplant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Userplant controller.
 *
 */
class UserplantController extends Controller
{
    /**
     * Lists all userplant entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        //$userplants = $em->getRepository('PlantBundle:Userplant')->findAll();
        $userplants = $em->getRepository('PlantBundle:Userplant')->findAllByUser($user);
        $paginator=$this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $userplants,
            $request->query->getInt('page', 1), /*page number*/
            $request->query->getInt('limit', 5) /*limit per page*/
        );
        return $this->render('@Plant/userplant/index.html.twig', array(
            'userplants' => $pagination,
        ));
    }

    /**
     * Creates a new userplant entity.
     *
     */
    public function newAction(Request $request)
    {
        $userplant = new Userplant();
        $form = $this->createForm('PlantBundle\Form\UserplantType', $userplant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $userplant->setUser( $this->getUser( $this->container->get('security.token_storage')->getToken()->getUser()));
            $em->persist($userplant);
            $em->flush();

            return $this->redirectToRoute('userplant_show', array('id' => $userplant->getId()));
        }

        return $this->render('@Plant/userplant/new.html.twig', array(
            'userplant' => $userplant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a userplant entity.
     *
     */
    public function showAction(Userplant $userplant)
    {
        $deleteForm = $this->createDeleteForm($userplant);

        return $this->render('@Plant/userplant/show.html.twig', array(
            'userplant' => $userplant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing userplant entity.
     *
     */
    public function editAction(Request $request, Userplant $userplant)
    {
        $deleteForm = $this->createDeleteForm($userplant);
        $editForm = $this->createForm('PlantBundle\Form\UserplantType', $userplant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('userplant_show', array('id' => $userplant->getId()));
        }

        return $this->render('@Plant/userplant/edit.html.twig', array(
            'userplant' => $userplant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a userplant entity.
     *
     */
    public function deleteAction(Request $request, Userplant $userplant)
    {
        $form = $this->createDeleteForm($userplant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($userplant);
            $em->flush();
        }

        return $this->redirectToRoute('userplant_index');
    }

    /**
     * Creates a form to delete a userplant entity.
     *
     * @param Userplant $userplant The userplant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Userplant $userplant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('userplant_delete', array('id' => $userplant->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
