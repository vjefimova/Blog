<?php

namespace ContainerYa6lwOJ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9a76a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3ff3b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb6acb = [
        
    ];

    public function getConnection()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'getConnection', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'getMetadataFactory', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'getExpressionBuilder', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'beginTransaction', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'getCache', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'transactional', array('func' => $func), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->transactional($func);
    }

    public function commit()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'commit', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->commit();
    }

    public function rollback()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'rollback', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'getClassMetadata', array('className' => $className), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'createQuery', array('dql' => $dql), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'createNamedQuery', array('name' => $name), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'createQueryBuilder', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'flush', array('entity' => $entity), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'clear', array('entityName' => $entityName), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->clear($entityName);
    }

    public function close()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'close', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->close();
    }

    public function persist($entity)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'persist', array('entity' => $entity), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'remove', array('entity' => $entity), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'refresh', array('entity' => $entity), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'detach', array('entity' => $entity), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'merge', array('entity' => $entity), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'contains', array('entity' => $entity), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'getEventManager', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'getConfiguration', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'isOpen', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'getUnitOfWork', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'getProxyFactory', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'initializeObject', array('obj' => $obj), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'getFilters', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'isFiltersStateClean', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'hasFilters', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return $this->valueHolder9a76a->hasFilters();
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

        $instance->initializer3ff3b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9a76a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9a76a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9a76a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, '__get', ['name' => $name], $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        if (isset(self::$publicPropertiesb6acb[$name])) {
            return $this->valueHolder9a76a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a76a;

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

        $targetObject = $this->valueHolder9a76a;
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
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a76a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9a76a;
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
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, '__isset', array('name' => $name), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a76a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9a76a;
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
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, '__unset', array('name' => $name), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a76a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9a76a;
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
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, '__clone', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        $this->valueHolder9a76a = clone $this->valueHolder9a76a;
    }

    public function __sleep()
    {
        $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, '__sleep', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;

        return array('valueHolder9a76a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3ff3b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3ff3b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3ff3b && ($this->initializer3ff3b->__invoke($valueHolder9a76a, $this, 'initializeProxy', array(), $this->initializer3ff3b) || 1) && $this->valueHolder9a76a = $valueHolder9a76a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9a76a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9a76a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
