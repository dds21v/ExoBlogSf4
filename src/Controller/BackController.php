<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BackController extends AbstractController
{
    /**
     * @return Response
     */
    public function list(): Response
    {
        return $this->render('backoffice/article/list.html.twig');
    }

    /**
     * @return Response
     */
    public function create(): Response
    {
        return $this->render('backoffice/article/create.html.twig');
    }

    /**
     * @return Response
     */
    public function edit(): Response
    {
        return $this->render('backoffice/article/edit.html.twig');
    }

    /**
     * @return Response
     */
    public function delete(): Response
    {
        return $this->render('backoffice/article/delete.html.twig');
    }
}

