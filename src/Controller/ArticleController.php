<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        // return new Response('My first page in Symfony');
        return $this->render('article/homepage.html.twig', [

        ]);
    }

    /**
     * @Route("/news/{slug}", name="article_show")
     */
    public function show($slug)
    {

        // fake comments
        $comments = [
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ratione, doloremque, dolor sit velit perferendis quasi debitis repellendus eum nesciunt nam maiores. Minus nesciunt ipsam quis voluptatibus enim provident eum.',
            'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis esse deleniti nesciunt at laudantium quaerat officiis veritatis placeat voluptatem doloremque facere, magnam inventore qui maiores autem id temporibus iusto deserunt?',
            'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis tempora cum facilis ea corporis obcaecati earum provident repellendus omnis sequi nesciunt assumenda magnam inventore repudiandae pariatur quam, eius modi tempore.'
        ];

        dump($slug, $this);

        // return new Response(sprintf(
        //     'Future page to show the article: %s',
        //     $slug
        // ));
        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'slug' => $slug,
            'comments' => $comments
        ]);
    }

    /**
     * @Route("/news/{slug}/heart", name="article_toggle_heart", methods="POST")
    */
    public function toggleArticleHeart($slug)
    {
        // TODO - actually heart/unheart the article!
        // return new Response(json_encode(['hearts' => rand(5, 100)]));
        // return $this->json(['hearts' => rand(5, 100)]);
        return new JsonResponse(['hearts' => rand(5, 100)]);
    }
}
