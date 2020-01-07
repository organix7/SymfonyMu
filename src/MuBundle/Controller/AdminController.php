<?php

namespace MuBundle\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class AdminController extends BaseAdminController{
    public function createNewUtilisateurEntity()
    {
     return $this->get('fos_user.user_manager')->createUser();
    }

    public function persistUtilisateurEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
        parent::persistEntity($user);
    }
}