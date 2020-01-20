<?php

namespace EventBundle\Controller;

use EventBundle\Entity\Avis;
use EventBundle\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Avi controller.
 *
 */
class AvisController extends Controller
{
    /**
     * Lists all avi entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('EventBundle:Event')->findAll();

        $avis = $em->getRepository('EventBundle:Avis')->findAll();

        return $this->render('avis/index.html.twig', array(
            'avis' => $avis,
            'event' => $event,
        ));
    }

    /**
     * Creates a new avi entity.
     *
     *//*
    public function newAction(Request $request,$id)
    {

            $em = $this->getDoctrine()->getManager();
            $event = $em->getRepository('EventBundle:Event')->find($id);

        $emm = $this->getDoctrine()->getManager();
        $avis = $emm->getRepository('EventBundle:Avis')->find($id);

            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            // $user_p = $em->getRepository(Avis::class)->findOneBy(['idU'=>$user]);
            if ($request->isMethod('POST')) {


                $event->setIdE($event);
                $user->setIdU($user);

                $avis->setComment($request->request->get('cmt'));



                $emm->flush();

                $em->flush();

                return $this->redirectToRoute('avis_show');

            }
            return $this->render('avis/addcom.html.twig', array( 'avi' => $avis , 'event'=>$event,
            ));
        }*/

    public function newAction($id)

    {
        $avi = new Avis();
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('EventBundle:Event')->find($id);
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
       // $user_p = $em->getRepository(Avis::class)->findOneBy(['idU'=>$user]);

            $avi->setIdE($event);
            $avi->setIdU($user);
            $avi->setComment("validation1");

            $em->persist($avi);
            $em->persist($event);
            $em->flush();

            return $this->redirectToRoute('avis_index', array('idA' => $avi->getIda()));


        return $this->render('avis/new.html.twig', array( 'avi' => $avi , 'event'=>$event,
        ));
    }

    /**
     * Finds and displays a avi entity.
     *
     */
    public function showAction(Avis $avi)
    {
        $deleteForm = $this->createDeleteForm($avi);

        return $this->render('avis/show.html.twig', array(
            'avi' => $avi,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing avi entity.
     *
     */
    public function editAction(Request $request, Avis $avi)
    {
        $deleteForm = $this->createDeleteForm($avi);
        $editForm = $this->createForm('EventBundle\Form\AvisType', $avi);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('avis_edit', array('idA' => $avi->getIda()));
        }

        return $this->render('avis/edit.html.twig', array(
            'avi' => $avi,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a avi entity.
     *
     */
    public function deleteAction(Request $request, Avis $avi)
    {
        $form = $this->createDeleteForm($avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($avi);
            $em->flush();
        }

        return $this->redirectToRoute('avis_index');
    }

    public function cmtAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('EventBundle:Avis')->find($id);

        if($request->isMethod('POST')){
        $event->setComment($request->request->get('cmt'));
        $em=$this->getDoctrine()->getManager();
        $em->persist($event);
        $em->flush();
        }
        return $this->render('avis/comment.html.twig', array(
        'ev' => "$event"

        ));
    }
    public function showaddcommAction(Event $event)
    {

        return $this->render('avis/addcom.html.twig', array(
            'event' => $event,

        ));
    }

    /**
     * Creates a form to delete a avi entity.
     *
     * @param Avis $avi The avi entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Avis $avi)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('avis_delete', array('idA' => $avi->getIda())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


}
