<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="app_default")
     * @return Response
     */
    public function default()
    {
        return $this->render("dashboard.html.twig");
    }

    /**
     * @Route("admin/{pageName}", name="app_index")
     * @param string $pageName Page name
     * @return Response
     */
    public function index(string $pageName)
    {
        return $this->render(
            sprintf(
                "%s.html.twig",
                $pageName
            )
        );
    }

}
