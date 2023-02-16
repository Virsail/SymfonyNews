<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    /**
     * @Route("/news", name="news_list")
     */
    public function list(): Response
    {
        $news = [ /* array of news items */ ];

        return $this->render('news/list.html.twig', [
            'news' => $news,
        ]);
    }
}
