<?php

namespace MuBundle\Controller;

use Proxies\__CG__\MuBundle\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class MuViewController extends Controller
{
    public function indexAction()
    {
        if(!$this->isGranted('IS_AUTHENTICATED_REMEMBERED'))
            return $this->redirectToRoute('fos_user_security_login');

        $repository = $this->getDoctrine()
            ->getRepository(Utilisateur::class);
        $user=$repository->findOneBy(['username' => $this->getUser()->getUsername()]);

        return $this->render('@Mu/muview/muview.html.twig',['user'=>$user]);
    }

    public function apiAction()
    {
        if(!$this->isGranted('IS_AUTHENTICATED_REMEMBERED'))
            return $this->redirectToRoute('fos_user_security_login');

        $repository = $this->getDoctrine()
            ->getRepository(Utilisateur::class);
        $user=$repository->findOneBy(['username' => $this->getUser()->getUsername()]);
        $zones = $user->getZoneAllowed();

        $em = $this->getDoctrine()->getManager('esync');

        $tagsZ1=null;
        $tagsZ2=null;
        $tagsZ3=null;

        foreach($zones as $zone){
            if($zone=="Z1"){
                $statement = $em->getConnection()->prepare('SELECT * FROM esync_tags WHERE Name REGEXP \'^Z1_\';');
                $statement->execute();
                $tagsZ1 = $statement->fetchAll();
            }
            elseif($zone=="Z2"){
                $statement = $em->getConnection()->prepare('SELECT * FROM esync_tags WHERE Name REGEXP \'^Z2_\';');
                $statement->execute();
                $tagsZ2 = $statement->fetchAll();
            }
            elseif($zone=="Z3"){
                $statement = $em->getConnection()->prepare('SELECT * FROM esync_tags WHERE Name REGEXP \'^Z3_\';');
                $statement->execute();
                $tagsZ3 = $statement->fetchAll();
            }
        }
        return new JsonResponse(['tagsZ1' => $tagsZ1,'tagsZ2' => $tagsZ2,'tagsZ3' => $tagsZ3]);
    }
}