<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.container_repository_factory' shared service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Repository\\RepositoryFactory.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ContainerRepositoryFactory.php';

return $this->services['doctrine.orm.container_repository_factory'] = new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(${($_ = isset($this->services['service_locator.sr6ctxe']) ? $this->services['service_locator.sr6ctxe'] : ($this->services['service_locator.sr6ctxe'] = new \Symfony\Component\DependencyInjection\ServiceLocator([]))) && false ?: '_'});
