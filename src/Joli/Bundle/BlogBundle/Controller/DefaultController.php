<?php

namespace Joli\Bundle\BlogBundle\Controller;
// namespace Joli\Bundle\BlogBundle\Entity\Post;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Joli\Bundle\BlogBundle\Entity\Post;
use Joli\Bundle\BlogBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction($name)
    {
        return array('name' => $name);
    }
     
    public function helloAction($username)
    {
        return new Response($username);
        $this->render("JoliBlogBundle:Default:hello.html.twig", array($username));
    }

    public function addAction($nb1, $nb2)
    {
        $result = $nb1 + $nb2;
        return new Response($result);
    }
    /**
    */

    public function currentAction()
    {
    	$result = date("H:i:s");
        // return new Response("<span color='red'>".$result."</span>");
        return $this->render("JoliBlogBundle:Default:current.html.twig", array('date' => $result));
    }

    public function squareAction($nb)
    {
        $result = $nb * $nb;
        return $this->render("JoliBlogBundle:Default:square.html.twig", array('number' => $result));
    }

    public function PostAction(Request $request)
    {
        $post = new Post();
        // $post->setTitle('A Foo Bar');
        // $post->setContent('CONTENT FOR TEST');
        // $post->setIsPublished('1');
        // // $post->setCategory(1);

        // $em = $this->getDoctrine()->getManager();
        // $em->persist($post);
        // $em->flush();

         $form = $this->createFormBuilder($post)
            ->add('title', 'text')
            ->add('content', 'text')
            ->add('Poster', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $post->setIsPublished("1");
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();
            // fait quelque chose comme sauvegarder la tâche dans la bdd
            $id = $post->getId();
            return $this->redirect($this->generateUrl('blog'));
        }

        // return new Response('Id du produit créé : '.$post->getId());
        return $this->render('JoliBlogBundle:Default:post_blog.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function listAllAction()
    {
        // recup doctrine > recup repository post > findAll > twig 
        $repository = $this->getDoctrine()->getRepository('JoliBlogBundle:Post');
        $post = $repository->findall();

        return $this->render("JoliBlogBundle:Default:post.html.twig", array('post' => $post));
    }

    public function listByIdAction($id)
    {
        // recup doctrine > recup repository post > findAll > twig 
        $repository = $this->getDoctrine()->getRepository('JoliBlogBundle:Post');
        $post = $repository->find($id);

        return $this->render("JoliBlogBundle:Default:post_id.html.twig", array('post' => $post));
    }

}
