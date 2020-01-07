<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.dbal.esync_connection' shared service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\Connection.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Connection.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Configuration.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\LoggerChain.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\event-manager\\lib\\Doctrine\\Common\\EventManager.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\AttachEntityListenersListener.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\ConnectionFactory.php';

$a = new \Doctrine\DBAL\Configuration();

$b = new \Doctrine\DBAL\Logging\LoggerChain();
$b->addLogger(${($_ = isset($this->services['doctrine.dbal.logger']) ? $this->services['doctrine.dbal.logger'] : $this->load('getDoctrine_Dbal_LoggerService.php')) && false ?: '_'});
$b->addLogger(${($_ = isset($this->services['doctrine.dbal.logger.profiling.esync']) ? $this->services['doctrine.dbal.logger.profiling.esync'] : ($this->services['doctrine.dbal.logger.profiling.esync'] = new \Doctrine\DBAL\Logging\DebugStack())) && false ?: '_'});

$a->setSQLLogger($b);
$c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
$c->addEventSubscriber(${($_ = isset($this->services['fos_user.user_listener']) ? $this->services['fos_user.user_listener'] : $this->load('getFosUser_UserListenerService.php')) && false ?: '_'});
$c->addEventListener([0 => 'loadClassMetadata'], ${($_ = isset($this->services['doctrine.orm.esync_listeners.attach_entity_listeners']) ? $this->services['doctrine.orm.esync_listeners.attach_entity_listeners'] : ($this->services['doctrine.orm.esync_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener())) && false ?: '_'});

return $this->services['doctrine.dbal.esync_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : ($this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))) && false ?: '_'}->createConnection(['driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => 3307, 'dbname' => 'esync', 'user' => 'eSyncExport', 'password' => 'eSyncPwd', 'charset' => 'UTF8', 'driverOptions' => [], 'defaultTableOptions' => []], $a, $c, []);