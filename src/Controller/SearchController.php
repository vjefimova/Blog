<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("/searchPage", name="searchpage")
     */
    public function index(): Response
    {
        return $this->render('search/index.html.twig', [
            'controller_name' => 'SearchController',
        ]);
    }

     /**
     * @Route("/search", name="search")
     */
    public function searchAction($request){
 
        $searchTerm ->query->get('search');        
        $em = $this->getDoctrine()->getManager();
 
        $query = $em->createQuery(
            'SELECT * FROM post 
            WHERE post.title LIKE :data')
           ->setParameter('data',$searchTerm);

           $res = $query->getResult();
    }

}
