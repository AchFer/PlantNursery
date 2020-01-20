<?php

namespace NuseryBundle\Controller;

use NuseryBundle\Entity\Revs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Rev controller.
 *
 */
class RevsController extends Controller
{
    /**
     * Lists all rev entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $revs = $em->getRepository('NuseryBundle:Revs')->findAll();

        return $this->render('@Nusery/revs/index.html.twig', array(
            'revs' => $revs,
        ));
    }

    /**
     * Creates a new rev entity.
     *
     */
    public function newAction(Request $request)
    {
        $rev = new Revs();
        $form = $this->createForm('NuseryBundle\Form\RevsType', $rev);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rev);
            $em->flush();

            return $this->redirectToRoute('revs_show', array('id' => $rev->getId()));
        }

        return $this->render('@Nusery/revs/new.html.twig', array(
            'rev' => $rev,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rev entity.
     *
     */
    public function showAction(Revs $rev)
    {
        $deleteForm = $this->createDeleteForm($rev);

        return $this->render('@Nusery/revs/show.html.twig', array(
            'rev' => $rev,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rev entity.
     *
     */
    public function editAction(Request $request, Revs $rev)
    {
        $deleteForm = $this->createDeleteForm($rev);
        $editForm = $this->createForm('NuseryBundle\Form\RevsType', $rev);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('revs_edit', array('id' => $rev->getId()));
        }

        return $this->render('@Nusery/revs/edit.html.twig', array(
            'rev' => $rev,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rev entity.
     *
     */
    public function deleteAction(Request $request, Revs $rev)
    {
        $form = $this->createDeleteForm($rev);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rev);
            $em->flush();
        }

        return $this->redirectToRoute('revs_index');
    }

    /**
     * Creates a form to delete a rev entity.
     *
     * @param Revs $rev The rev entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Revs $rev)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('revs_delete', array('id' => $rev->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
