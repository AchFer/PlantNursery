<?php

namespace NuseryBundle\Controller;

use NuseryBundle\Entity\Nursery;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

/**
 * Nursery controller.
 *
 */
class NurseryController extends Controller
{
    /**
     * Lists all nursery entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $nurseries = $em->getRepository('NuseryBundle:Nursery')->findAll();

        return $this->render('@Nusery/nursery/index.html.twig', array(
            'nurseries' => $nurseries,
        ));
    }

    /**
     * Creates a new nursery entity.
     *
     */
    public function newAction(Request $request)
    {
        $nursery = new Nursery();
        $form = $this->createForm('NuseryBundle\Form\NurseryType', $nursery);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /**
             * @var UploadedFile $file
             */
            $file=$nursery->getImg();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'),$fileName
            );
            $nursery->setImg($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($nursery);
            $em->flush();

            return $this->redirectToRoute('nursery_show', array('idN' => $nursery->getIdn()));
        }

        return $this->render('@Nusery/nursery/new.html.twig', array(
            'nursery' => $nursery,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a nursery entity.
     *
     */
    public function showAction(Nursery $nursery)
    {
        $deleteForm = $this->createDeleteForm($nursery);

        return $this->render('@Nusery/nursery/show.html.twig', array(
            'nursery' => $nursery,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing nursery entity.
     *
     */
    public function editAction(Request $request, Nursery $nursery)
    {
        $deleteForm = $this->createDeleteForm($nursery);
        $editForm = $this->createForm('NuseryBundle\Form\NurseryType', $nursery);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('nursery_edit', array('idN' => $nursery->getIdn()));
        }

        return $this->render('@Nusery/nursery/edit.html.twig', array(
            'nursery' => $nursery,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a nursery entity.
     *
     */
    public function deleteAction(Request $request, Nursery $nursery)
    {
        $form = $this->createDeleteForm($nursery);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($nursery);
            $em->flush();
        }

        return $this->redirectToRoute('nursery_index');
    }

    /**
     * Creates a form to delete a nursery entity.
     *
     * @param Nursery $nursery The nursery entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Nursery $nursery)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('nursery_delete', array('idN' => $nursery->getIdn())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
