<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Article;
use BlogBundle\Entity\Commentaire;
use MongoDB\Driver\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use UserBundle\Entity\User;


/**
 * Article controller.
 *
 */
class ArticleController extends Controller
{
    /**
     * Lists all article entities.
     *
     */
    public function indexAction()
    {
        //$deleteForm = $this->createDeleteForm($article);
        $em = $this->getDoctrine()->getManager();

        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
        {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $username = $user->getUsername();
        }

        $articles = $em->getRepository('BlogBundle:Article')->findBy( ['author' => $username]);

        return $this->render('article/index.html.twig', array(
            'articles' => $articles,
            //'article' => $article,
            //'delete_form' => $deleteForm->createView(),
        ));
    }

    public function pdfAction(Article $article)
    {
        $snappy = $this->get('knp_snappy.pdf');

        $html = $this->renderView('article/pdf.html.twig', array(
            'article' => $article,
        ));

        $filename = 'myFirstSnappyPDF';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }


    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('BlogBundle:Article')->findAll();

        return $this->render('article/list.html.twig', array(
            'articles' => $articles,
        ));
    }

    public function listCat1Action()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('BlogBundle:Article')->findBy(['category' =>'Garden Care']);

        return $this->render('article/listCat.html.twig', array(
            'articles' => $articles,
        ));
    }

    public function listCat2Action()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('BlogBundle:Article')->findBy(['category' =>'Garden Tech']);

        return $this->render('article/listCat.html.twig', array(
            'articles' => $articles,
        ));
    }

    public function listCat3Action()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('BlogBundle:Article')->findBy(['category' =>'Plants']);

        return $this->render('article/listCat.html.twig', array(
            'articles' => $articles,
        ));
    }

    public function listCat4Action()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('BlogBundle:Article')->findBy(['category' =>'HousePlants']);

        return $this->render('article/listCat.html.twig', array(
            'articles' => $articles,
        ));
    }

    public function listCat5Action()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('BlogBundle:Article')->findBy(['category' =>'Seeds & Bulbs']);

        return $this->render('article/listCat.html.twig', array(
            'articles' => $articles,
        ));
    }

    public function listCat6Action()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('BlogBundle:Article')->findBy(['category' =>'Trees & Shrubs']);

        return $this->render('article/listCat.html.twig', array(
            'articles' => $articles,
        ));
    }



    public function listCat7Action()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('BlogBundle:Article')->findBy(['category' =>'DIY']);

        return $this->render('article/listCat.html.twig', array(
            'articles' => $articles,
        ));
    }

    public function listCat8Action()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('BlogBundle:Article')->findBy(['category' =>'Uncategorized']);

        return $this->render('article/listCat.html.twig', array(
            'articles' => $articles,
        ));
    }

    /**
     * Creates a new article entity.
     *
     */
    public function newAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm('BlogBundle\Form\ArticleType', $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /**
             * @var UploadedFile $file
             */
            $file=$article->getImage();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'),$fileName
            );
            $article->setImage($fileName);
            $em = $this->getDoctrine()->getManager();

            if( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {
                $user = $this->container->get('security.token_storage')->getToken()->getUser();
                $username = $user->getUsername();
                //$id = $user->getId();
            }



            $article->setAuthor($username);
            $article->setArchive(" ");
            $article->setViews(0);
            $article->setId($user);
            $article->setDate(new \DateTime("now"));
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('article_show', array('idA' => $article->getIda()));
        }

        return $this->render('article/new.html.twig', array(
            'article' => $article,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a article entity.
     *
     */
    public function showAction(Request $request,Article $article)
    {

        $em = $this->getDoctrine()->getManager();

        $views = $article->getViews();
        $article->setViews($views + 1);
        $em->persist($article);
        $em->flush();

        $commentaire = new Commentaire();

        $articles = $em->getRepository('BlogBundle:Article')->findAll(null,['date'=>'ASC']);

        $form_commentaire = $this->createForm('BlogBundle\Form\CommentaireType', $commentaire);
        $form_commentaire->handleRequest($request);

        if ($form_commentaire->isSubmitted() && $form_commentaire->isValid()) {

            if( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
            {

                $user = $this->container->get('security.token_storage')->getToken()->getUser();
                $id = $user->getId();
            }

            $commentaire->getId($id);
            $commentaire->setArticleId($article);
            $commentaire->setFlag(1);
            $commentaire->setDate(new \DateTime("now"));
            $em->merge($commentaire);
            $em->flush();



            return $this->redirectToRoute('article_show', array('article'=>$article,'idCommentaire' => $commentaire->getIdcommentaire()));
        }

        $commentaires = $em->getRepository('BlogBundle:Commentaire')->findBy(
            array('articleId' => $article->getIdA(), 'flag' => 1), array('date' => 'ASC')
        );

        return $this->render('article/show.html.twig', array(
            'article' => $article,
            'articles' => $articles,

            'commentaires' => $commentaires,

            'form' => $form_commentaire->createView(),

        ));

    }

    /**
     * Displays a form to edit an existing article entity.
     *
     */
    public function editAction(Request $request, Article $article)
    {
        //$deleteForm = $this->createDeleteForm($article);
        $editForm = $this->createForm('BlogBundle\Form\ArticleType', $article);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('article_edit', array('idA' => $article->getIda()));
        }

        return $this->render('article/edit.html.twig', array(
            'article' => $article,
            'edit_form' => $editForm->createView(),
            //'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a article entity.
     *
     */
    public function deleteAction(Request $request, Article $article)
    {
        //$form = $this->createDeleteForm($article);
        //$form->handleRequest($request);

        //if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();
        //}

        return $this->redirectToRoute('article_index');
    }

    /**
     * Creates a form to delete a article entity.
     *
     * @param Article $article The article entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Article $article)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('article_delete', array('idA' => $article->getIda())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $entities =  $em->getRepository('BlogBundle:Article')->findEntitiesByString($requestString);
        if(!$entities) {
            $result['entities']['error'] = "there is no demand with this titre";
        } else {

            $result['entities'] = $this->getRealEntities($entities);
        }
        return new Response(json_encode($result));
    }

    public function getRealEntities($entities){
        foreach ($entities as $entity){
            $realEntities[$entity->getId_article()] = [$entity->getTitre(), $entity->getContent()];
        }
        return $realEntities;
    }

}
