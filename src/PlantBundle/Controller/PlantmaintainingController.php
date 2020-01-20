<?php

namespace PlantBundle\Controller;

use http\Client\Curl\User;
use PlantBundle\Entity\Plantmaintaining;
use PlantBundle\Entity\Userplant;
use PlantBundle\Repository\UserplantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Plantmaintaining controller.
 *
 */
class PlantmaintainingController extends Controller
{
    /**
     * Lists all plantmaintaining entities.
     *
     */
    public function MyPlantIndexAction( Request $request,Userplant $userplant )
    {
        $em = $this->getDoctrine()->getManager();

        $plantmaintainings = $em->getRepository('PlantBundle:Plantmaintaining')->findByUserplantOrderedByDate( $userplant);

        $paginator=$this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $plantmaintainings,
            $request->query->getInt('page', 1), /*page number*/
            $request->query->getInt('limit', 5) /*limit per page*/
        );
        return $this->render('@Plant/plantmaintaining/index.html.twig', array(
            'plantmaintainings' => $pagination,
        ));
    }
        public function indexAction( Request $request )
    {
        $em = $this->getDoctrine()->getManager();

        $plantmaintainings = $em->getRepository('PlantBundle:Plantmaintaining')->findAll();

        $paginator=$this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $plantmaintainings,
            $request->query->getInt('page', 1), /*page number*/
            $request->query->getInt('limit', 5) /*limit per page*/
        );
       return $this->render('@Plant/plantmaintaining/index.html.twig', array(
            'plantmaintainings' => $pagination,
        ));
    }

    /**
     * Creates a new plantmaintaining entity.
     *
     */
    public function newAction(Request $request)
    {
        $plantmaintaining = new Plantmaintaining();
        $user = $this->getUser( $this->container->get('security.token_storage')->getToken()->getUser());
        $em = $this->getDoctrine()->getManager();
        $userplant= $em->getRepository('PlantBundle:Plantmaintaining')->find;

        $form = $this->createForm('PlantBundle\Form\PlantmaintainingType', $plantmaintaining);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /**
             * @var UploadedFile $file
             */
            $file=$plantmaintaining->getPhoto();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'),$fileName
            );
            $plantmaintaining->setPhoto($fileName);
            $em->persist($plantmaintaining);
            $em->flush();

            return $this->redirectToRoute('plantmaintaining_show', array('id' => $plantmaintaining->getId()));
        }

        return $this->render('@Plant/plantmaintaining/new.html.twig', array(
            'plantmaintaining' => $plantmaintaining,
            'form' => $form->createView(),
        ));
    }

    public function myPlantmaintainingNewAction(Request $request,Userplant $userplant)
    {

        $plantmaintaining = new Plantmaintaining();
        //       $userplantRepository= $em->getRepository('PlantBundle:Plantmaintaining');
        //      $user = $this->getUser( $this->container->get('security.token_storage')->getToken()->getUser());

        $form = $this->createForm('PlantBundle\Form\PlantmaintainingType', $plantmaintaining);
        $form->handleRequest($request);
        $plantmaintaining->setUserplant($userplant);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($plantmaintaining);
            $em->flush();

            return $this->redirectToRoute('plantmaintaining_show', array('id' => $plantmaintaining->getId()));
        }

        return $this->render('@Plant/plantmaintaining/new.html.twig', array(
            'plantmaintaining' => $plantmaintaining,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a plantmaintaining entity.
     *
     */
    public function showAction(Plantmaintaining $plantmaintaining)
    {
        $deleteForm = $this->createDeleteForm($plantmaintaining);

        return $this->render('@Plant/plantmaintaining/show.html.twig', array(
            'plantmaintaining' => $plantmaintaining,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing plantmaintaining entity.
     *
     */
    public function editAction(Request $request, Plantmaintaining $plantmaintaining)
    {
        $deleteForm = $this->createDeleteForm($plantmaintaining);
        $editForm = $this->createForm('PlantBundle\Form\PlantmaintainingType', $plantmaintaining);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            /**
             * @var UploadedFile $file
             */
            $file=$plantmaintaining->getPhoto();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'),$fileName
            );
            $plantmaintaining->setPhoto($fileName);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('plantmaintaining_show', array('id' => $plantmaintaining->getId()));
        }

        return $this->render('@Plant/plantmaintaining/edit.html.twig', array(
            'plantmaintaining' => $plantmaintaining,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a plantmaintaining entity.
     *
     */
    public function deleteAction(Request $request, Plantmaintaining $plantmaintaining)
    {
        $form = $this->createDeleteForm($plantmaintaining);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($plantmaintaining);
            $em->flush();
        }

        return $this->redirectToRoute('plantmaintaining_index');
    }

    /**
     * Creates a form to delete a plantmaintaining entity.
     *
     * @param Plantmaintaining $plantmaintaining The plantmaintaining entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Plantmaintaining $plantmaintaining)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('plantmaintaining_delete', array('id' => $plantmaintaining->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
