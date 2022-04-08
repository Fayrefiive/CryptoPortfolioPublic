<?php

namespace ContainerZx51FHx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2956e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer79d1a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf1c53 = [
        
    ];

    public function getConnection()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'getConnection', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'getMetadataFactory', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'getExpressionBuilder', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'beginTransaction', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'getCache', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'transactional', array('func' => $func), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'commit', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->commit();
    }

    public function rollback()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'rollback', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'getClassMetadata', array('className' => $className), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'createQuery', array('dql' => $dql), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'createNamedQuery', array('name' => $name), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'createQueryBuilder', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'flush', array('entity' => $entity), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'clear', array('entityName' => $entityName), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->clear($entityName);
    }

    public function close()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'close', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->close();
    }

    public function persist($entity)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'persist', array('entity' => $entity), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'remove', array('entity' => $entity), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'refresh', array('entity' => $entity), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'detach', array('entity' => $entity), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'merge', array('entity' => $entity), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'contains', array('entity' => $entity), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'getEventManager', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'getConfiguration', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'isOpen', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'getUnitOfWork', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'getProxyFactory', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'initializeObject', array('obj' => $obj), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'getFilters', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'isFiltersStateClean', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'hasFilters', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return $this->valueHolder2956e->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer79d1a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2956e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2956e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2956e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, '__get', ['name' => $name], $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        if (isset(self::$publicPropertiesf1c53[$name])) {
            return $this->valueHolder2956e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2956e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2956e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2956e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2956e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, '__isset', array('name' => $name), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2956e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2956e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, '__unset', array('name' => $name), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2956e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2956e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, '__clone', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        $this->valueHolder2956e = clone $this->valueHolder2956e;
    }

    public function __sleep()
    {
        $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, '__sleep', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;

        return array('valueHolder2956e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer79d1a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer79d1a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer79d1a && ($this->initializer79d1a->__invoke($valueHolder2956e, $this, 'initializeProxy', array(), $this->initializer79d1a) || 1) && $this->valueHolder2956e = $valueHolder2956e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2956e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2956e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
