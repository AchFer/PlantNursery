<?php

namespace EventBundle\Controller;

use EventBundle\Entity\Participant;
use http\Message\Body;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Participant controller.
 *
 */
class ParticipantController extends Controller
{
    /**
     * Lists all participant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $participants = $em->getRepository('EventBundle:Participant')->findAll();

        return $this->render('participant/index.html.twig', array(
            'participants' => $participants,
        ));
    }

    /**
     * Creates a new participant entity.
     *
     */

    public function newAction(Request $request)
    {
        $participant = new Participant();
        $form = $this->createForm('EventBundle\Form\ParticipantType', $participant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($participant);
            $em->flush();

            return $this->redirectToRoute('participant_show', array('idPar' => $participant->getIdpar()));
        }

        return $this->render('participant/new.html.twig', array(
            'participant' => $participant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a participant entity.
     *
     */

    public function showAction(Participant $participant)
    {
        $deleteForm = $this->createDeleteForm($participant);

        return $this->render('participant/show.html.twig', array(
            'participant' => $participant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing participant entity.
     *
     */

    public function editAction(Request $request, Participant $participant)
    {
        $deleteForm = $this->createDeleteForm($participant);
        $editForm = $this->createForm('EventBundle\Form\ParticipantType', $participant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('participant_edit', array('idPar' => $participant->getIdpar()));
        }

        return $this->render('participant/edit.html.twig', array(
            'participant' => $participant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a participant entity.
     *
     */

    public function deleteAction(Request $request, Participant $participant)
    {
        $form = $this->createDeleteForm($participant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($participant);
            $em->flush();
        }

        return $this->redirectToRoute('participant_index');
    }

    /**
     * Creates a form to delete a participant entity.
     *
     * @param Participant $participant The participant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */

    private function createDeleteForm(Participant $participant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('participant_delete', array('idPar' => $participant->getIdpar())))
            ->setMethod('DELETE')
            ->getForm();
    }

    public function participerAction($idEvent)
    {
        $participant = new Participant();
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('EventBundle:Event')->find($idEvent);
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $user_p = $em->getRepository(Participant::class)->findOneBy(['idU' => $user]);
        $event_p = $em->getRepository(Participant::class)->findOneBy(['idE' => $event]);
        try {
            if ($user_p && !$event_p) {
                if ($event->getNbP() > 0) {
                    $event->setNbP($event->getNbP() - 1);
                    $participant->setIdU($user);
                    $participant->setIdE($event);
                    $em->persist($event);
                    $em->persist($participant);
                    $em->flush();/*
            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 25, 'tls')
                ->setUsername('bmahjoubi1@gmail.com')
                ->setPassword('14762473');
            $mailer = new \Swift_Mailer($transport);
            $message=(new \Swift_Message('Reservation '))
                ->setFrom('bmahjoubi1@gmail.com')
                ->setTo('raed.bahri@esprit.tn')

                ->setBody('<h3> hghvjh </h3>','text/html');
            $mailer->send($message);*/
                    return $this->render('participant/msg1.html.twig');
                } else {
                    return $this->render('participant/msg.html.twig');
                }
            }
        }


            catch
                (\Exception $e){
                };

           return $this->render('participant/msg4.html.twig');

}




    public function affichelistAction()
    {
        $em = $this->getDoctrine()->getManager();

        $events = $em->getRepository('EventBundle:Event')->findAll();

        return $this->render('event/participation.html.twig', array(
            'events' => $events,
        ));
    }
    public function deleteparticipationAction( $idEvent, $idUser)
    {
        $em = $this->getDoctrine()->getManager();
        $par = $em->getRepository(Participant::class)->findBy(['idE'=>$idEvent],['idU'=>$idUser]);
        $em->remove($par);
       $em->flush();

    }

    public function annuleparticiperAction($idEvent)
    {
        $participant = new Participant();
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('EventBundle:Event')->find($idEvent);
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $user_p = $em->getRepository(Participant::class)->findOneBy(['idU'=>$user]);
        try {
            if($user_p) {

                if ($event->getNbP() >= 0) {
                    $event->setNbP($event->getNbP() + 1);
                    $par = $em->getRepository(Participant::class)->findOneBy(['idE' => $idEvent]);
                    $em->remove($par);
                    $em->persist($event);
                    $em->flush();
                    return $this->render('participant/msg3.html.twig');

                }
            }
        } catch(\Exception $e){};
        return $this->render('participant/msg2.html.twig');


    }


}