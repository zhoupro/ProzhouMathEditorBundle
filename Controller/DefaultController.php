<?php

namespace Prozhou\MathEditorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProzhouMathEditorBundle:Default:index.html.twig');
    }
}
