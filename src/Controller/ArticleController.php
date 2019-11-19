<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('My first page in Symfony');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {

        // fake comments
        $comments = [
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ratione, doloremque, dolor sit velit perferendis quasi debitis repellendus eum nesciunt nam maiores. Minus nesciunt ipsam quis voluptatibus enim provident eum.',
            'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis esse deleniti nesciunt at laudantium quaerat officiis veritatis placeat voluptatem doloremque facere, magnam inventore qui maiores autem id temporibus iusto deserunt?',
            'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis tempora cum facilis ea corporis obcaecati earum provident repellendus omnis sequi nesciunt assumenda magnam inventore repudiandae pariatur quam, eius modi tempore.'
        ];

        // return new Response(sprintf(
        //     'Future page to show the article: %s',
        //     $slug
        // ));
        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments
        ]);
    }
}
