<?php

namespace Site\SavalizeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteSavalizeBundle:Default:index.html.twig');
    }
    public function showReviewsAction()
    {
    	return $this->render('SiteSavalizeBundle:Default:reviews.html.twig', array());
    }
}
