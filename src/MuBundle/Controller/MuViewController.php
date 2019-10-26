<?php

namespace MuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MuViewController extends Controller
{
    public function indexAction()
    {
        if(!$this->isGranted('IS_AUTHENTICATED_REMEMBERED'))
            return $this->redirectToRoute('fos_user_security_login');
        return $this->render('@Mu/muview/muview.html.twig');
    }
}