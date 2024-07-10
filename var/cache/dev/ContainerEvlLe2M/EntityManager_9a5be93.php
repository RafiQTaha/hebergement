<?php

namespace ContainerEvlLe2M;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3c978 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer53f90 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7ddd3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'getConnection', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'getMetadataFactory', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'getExpressionBuilder', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'beginTransaction', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'getCache', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->getCache();
    }

    public function transactional($func)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'transactional', array('func' => $func), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'wrapInTransaction', array('func' => $func), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'commit', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->commit();
    }

    public function rollback()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'rollback', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'getClassMetadata', array('className' => $className), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'createQuery', array('dql' => $dql), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'createNamedQuery', array('name' => $name), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'createQueryBuilder', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'flush', array('entity' => $entity), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'clear', array('entityName' => $entityName), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->clear($entityName);
    }

    public function close()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'close', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->close();
    }

    public function persist($entity)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'persist', array('entity' => $entity), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'remove', array('entity' => $entity), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'detach', array('entity' => $entity), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'merge', array('entity' => $entity), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'getRepository', array('entityName' => $entityName), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'contains', array('entity' => $entity), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'getEventManager', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'getConfiguration', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'isOpen', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'getUnitOfWork', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'getProxyFactory', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'initializeObject', array('obj' => $obj), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'getFilters', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'isFiltersStateClean', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'hasFilters', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return $this->valueHolder3c978->hasFilters();
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

        $instance->initializer53f90 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder3c978) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3c978 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3c978->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, '__get', ['name' => $name], $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        if (isset(self::$publicProperties7ddd3[$name])) {
            return $this->valueHolder3c978->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c978;

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

        $targetObject = $this->valueHolder3c978;
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
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c978;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3c978;
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
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, '__isset', array('name' => $name), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c978;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3c978;
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
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, '__unset', array('name' => $name), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c978;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3c978;
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
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, '__clone', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        $this->valueHolder3c978 = clone $this->valueHolder3c978;
    }

    public function __sleep()
    {
        $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, '__sleep', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;

        return array('valueHolder3c978');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer53f90 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer53f90;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer53f90 && ($this->initializer53f90->__invoke($valueHolder3c978, $this, 'initializeProxy', array(), $this->initializer53f90) || 1) && $this->valueHolder3c978 = $valueHolder3c978;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3c978;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3c978;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
