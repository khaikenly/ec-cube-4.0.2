<?php

namespace Customize\Controller;

use Eccube\Controller\AbstractController;
use Eccube\Repository\NewsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class NewsController extends AbstractController
{
    protected $newsRepo;

    public function __construct(NewsRepository $newsRepository) {
        $this->newsRepo = $newsRepository;
    }

    /**
     * @Route("/news", name="news_list")
     * @Template("News/list.twig");
     */
    public function index(Request $request)
    {
        $NewsList = $this->newsRepo->getList();
        return [
            'NewsList' => $NewsList
        ];
    }

    /**
     * @Route("/news/{id}/detail", name="news_detail")
     * @Template("News/detail.twig");
     */
    public function detail(Request $request, $id = null)
    {
        
        return [];
    }
}


