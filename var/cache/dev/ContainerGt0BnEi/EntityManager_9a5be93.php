<?php

namespace ContainerGt0BnEi;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf86b5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfdc0d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfa7a0 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'getConnection', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'getMetadataFactory', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'getExpressionBuilder', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'beginTransaction', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'getCache', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'transactional', array('func' => $func), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->transactional($func);
    }

    public function commit()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'commit', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->commit();
    }

    public function rollback()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'rollback', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'getClassMetadata', array('className' => $className), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'createQuery', array('dql' => $dql), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'createNamedQuery', array('name' => $name), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'createQueryBuilder', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'flush', array('entity' => $entity), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'clear', array('entityName' => $entityName), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->clear($entityName);
    }

    public function close()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'close', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->close();
    }

    public function persist($entity)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'persist', array('entity' => $entity), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'remove', array('entity' => $entity), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'refresh', array('entity' => $entity), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'detach', array('entity' => $entity), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'merge', array('entity' => $entity), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'contains', array('entity' => $entity), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'getEventManager', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'getConfiguration', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'isOpen', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'getUnitOfWork', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'getProxyFactory', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'initializeObject', array('obj' => $obj), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'getFilters', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'isFiltersStateClean', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'hasFilters', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return $this->valueHolderf86b5->hasFilters();
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

        $instance->initializerfdc0d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf86b5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf86b5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf86b5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, '__get', ['name' => $name], $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        if (isset(self::$publicPropertiesfa7a0[$name])) {
            return $this->valueHolderf86b5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf86b5;

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

        $targetObject = $this->valueHolderf86b5;
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
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf86b5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf86b5;
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
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, '__isset', array('name' => $name), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf86b5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf86b5;
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
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, '__unset', array('name' => $name), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf86b5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf86b5;
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
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, '__clone', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        $this->valueHolderf86b5 = clone $this->valueHolderf86b5;
    }

    public function __sleep()
    {
        $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, '__sleep', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;

        return array('valueHolderf86b5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfdc0d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfdc0d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfdc0d && ($this->initializerfdc0d->__invoke($valueHolderf86b5, $this, 'initializeProxy', array(), $this->initializerfdc0d) || 1) && $this->valueHolderf86b5 = $valueHolderf86b5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf86b5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf86b5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
