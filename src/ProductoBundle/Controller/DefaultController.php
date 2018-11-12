<?php

namespace ProductoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
/*  */
class DefaultController extends Controller
{
    /**
     * @Route("/")
     */

    public function indexAction()
    {
          
    	$productos=$this->getDoctrine()
 		-> getRepository ('ProductoBundle:Producto')
 		-> findAll();
        return $this->render('ProductoBundle:Default:index.html.twig');

    }


}
