<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine_cache.providers.doctrine.orm.esync_query_cache' shared service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ArrayCache.php';

$this->services['doctrine_cache.providers.doctrine.orm.esync_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

$instance->setNamespace('sf_orm_esync_457731a655fcae1c3414606fc5bc5cf85bd13bf343bbfc3e08c9f3fc89571a96');

return $instance;
