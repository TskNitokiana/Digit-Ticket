<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.default_configuration' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriverChain.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/ContainerAwareEntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';

$instance = new \Doctrine\ORM\Configuration();

$a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), array(0 => ($this->targetDirs[3].'/src/Entity'))), 'App\\Entity');

$instance->setEntityNamespaces(array('App' => 'App\\Entity'));
$instance->setMetadataCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php')));
$instance->setQueryCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php')));
$instance->setResultCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php')));
$instance->setMetadataDriverImpl($a);
$instance->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$instance->setProxyNamespace('Proxies');
$instance->setAutoGenerateProxyClasses(true);
$instance->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$instance->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$instance->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
$instance->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$instance->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this));
$instance->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'App\\Repository\\CategoryRepository' => array('privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService.php', true),
    'App\\Repository\\CommandRepository' => array('privates', 'App\\Repository\\CommandRepository', 'getCommandRepositoryService.php', true),
    'App\\Repository\\EventRepository' => array('privates', 'App\\Repository\\EventRepository', 'getEventRepositoryService.php', true),
    'App\\Repository\\PayementRepository' => array('privates', 'App\\Repository\\PayementRepository', 'getPayementRepositoryService.php', true),
    'App\\Repository\\TicketRepository' => array('privates', 'App\\Repository\\TicketRepository', 'getTicketRepositoryService.php', true),
    'App\\Repository\\TypeEventRepository' => array('privates', 'App\\Repository\\TypeEventRepository', 'getTypeEventRepositoryService.php', true),
    'App\\Repository\\TypePriceRepository' => array('privates', 'App\\Repository\\TypePriceRepository', 'getTypePriceRepositoryService.php', true),
    'App\\Repository\\UserRepository' => array('privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true),
    'App\\Repository\\UserTypeRepository' => array('privates', 'App\\Repository\\UserTypeRepository', 'getUserTypeRepositoryService.php', true),
))));

return $instance;
