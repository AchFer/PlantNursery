<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Ecommerce\EcommerceBundle\Entity\Media;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MediaAdminController extends Controller
{
    /**
     * Lists all medium entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $media = $em->getRepository('EcommerceEcommerceBundle:Media')->findAll();

        return $this->render('@EcommerceEcommerce/admin/media/index.html.twig', array(
            'media' => $media,
        ));
    }

    /**
     * Creates a new medium entity.
     *
     */
    public function newAction(Request $request)
    {
        $media = new Media();
        $form = $this->createForm('Ecommerce\EcommerceBundle\Form\MediaType', $media);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($media);
            $em->flush();
            $form['file']->getData();
        // var_dump($form['file']->getData());
          //  var_dump($form['file']->getData()->getClientOriginalName());
        // die();
            return $this->redirectToRoute('admin_media_show', array('id' => $media->getId()));
        }

        return $this->render('@EcommerceEcommerce/admin/media/new.html.twig', array(
            'medium' => $media,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a medium entity.
     *
     */
    public function showAction(Media $media)
    {
        $deleteForm = $this->createDeleteForm($media);

        return $this->render('@EcommerceEcommerce/admin/media/show.html.twig', array(
            'medium' => $media,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing medium entity.
     *
     */
    public function editAction(Request $request, Media $media)
    {
        $deleteForm = $this->createDeleteForm($media);
        $editForm = $this->createForm('Ecommerce\EcommerceBundle\Form\MediaType', $media);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_media_edit', array('id' => $media->getId()));
        }

        return $this->render('@EcommerceEcommerce/admin/media/edit.html.twig', array(
            'medium' => $media,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a medium entity.
     *
     */
    public function deleteAction(Request $request, Media $media)
    {
        $form = $this->createDeleteForm($media);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($media);
            $em->flush();
        }

        return $this->redirectToRoute('admin_media_index');
    }

    /**
     * Creates a form to delete a medium entity.
     *
     * @param Media $medium The medium entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Media $media)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_media_delete', array('id' => $media->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
