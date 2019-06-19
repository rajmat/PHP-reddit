<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/* use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; */
use App\Entity\RedditPost;


class DefaultController extends AbstractController
{
  /** 
   * @Route("/", name="home", methods={"GET"})
   */
  public function index()
  {
    /* return new Response("<html><body>Hello World</body></html>"); */

    /* $posts = [(object) array('id' => '1', 'title' => 'https://media.giphy.com/media/l0Ex4ttVHDjuthEQ0/source.gif'), (object) array('id' => '2', 'title' => 'masodik poszt')]; */

    $posts = $this->getDoctrine()->getRepository(RedditPost::class)->findAll();

    return $this->render('index.html.twig', [
      "link" => "Submit a new post",
      "posts" => $posts,
    ]);
  }

  /**
   * @Route("/submit", name="submit", methods={"GET"})
   */
  public function newPost()
  {
    return $this->render('submit.html.twig');
  }

  /**
   * @Route("/save")
   */

  public function save()
  {
    $entityManager = $this->getDoctrine()->getManager();

    $post = new RedditPost($_POST["title"], $_POST["URL"]);

    $entityManager->persist($post);
    $entityManager->flush();

    header("Location: http://127.0.0.1:8000/");
    exit();
  }

  /**
   * @Route("/upvote/{id}")
   */

   public function upvote ($id) {
    $findvoted = $this->getDoctrine()->getRepository(RedditPost::class)->find($id);

    $currentVote = $findvoted->getVote_count();
    $newVote = $currentVote+1;
    $findvoted->setVote_count($newVote);

    $entityManager = $this->getDoctrine()->getManager();

    $entityManager->persist($findvoted);
    $entityManager->flush();

    header("Location: http://127.0.0.1:8000/");
    exit();
   }
};
