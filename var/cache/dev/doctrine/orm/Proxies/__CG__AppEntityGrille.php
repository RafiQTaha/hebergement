<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Grille extends \App\Entity\Grille implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'code', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'designation', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'active', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'created', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'usercreated', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'updated', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'UserUpdated', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'typeChambre', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'montant', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'tOperationdets'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'code', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'designation', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'active', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'created', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'usercreated', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'updated', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'UserUpdated', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'typeChambre', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'montant', '' . "\0" . 'App\\Entity\\Grille' . "\0" . 'tOperationdets'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Grille $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(?\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(?\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', []);

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode(?string $code): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', [$code]);

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getDesignation(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDesignation', []);

        return parent::getDesignation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDesignation(?string $designation): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDesignation', [$designation]);

        return parent::setDesignation($designation);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive(float $active): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated(?\DateTimeInterface $created): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsercreated(): ?\App\Entity\user
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsercreated', []);

        return parent::getUsercreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsercreated(?\App\Entity\user $usercreated): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsercreated', [$usercreated]);

        return parent::setUsercreated($usercreated);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', []);

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated(?\DateTimeInterface $updated): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', [$updated]);

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserUpdated(): ?\App\Entity\user
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserUpdated', []);

        return parent::getUserUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserUpdated(?\App\Entity\user $UserUpdated): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserUpdated', [$UserUpdated]);

        return parent::setUserUpdated($UserUpdated);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeChambre(): ?\App\Entity\TypeChambre
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeChambre', []);

        return parent::getTypeChambre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeChambre(?\App\Entity\TypeChambre $typeChambre): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeChambre', [$typeChambre]);

        return parent::setTypeChambre($typeChambre);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontant(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontant', []);

        return parent::getMontant();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontant(?int $montant): \App\Entity\Grille
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontant', [$montant]);

        return parent::setMontant($montant);
    }

    /**
     * {@inheritDoc}
     */
    public function getTOperationdets(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTOperationdets', []);

        return parent::getTOperationdets();
    }

    /**
     * {@inheritDoc}
     */
    public function addTOperationdet(\App\Entity\TOperationdet $tOperationdet): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTOperationdet', [$tOperationdet]);

        return parent::addTOperationdet($tOperationdet);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTOperationdet(\App\Entity\TOperationdet $tOperationdet): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTOperationdet', [$tOperationdet]);

        return parent::removeTOperationdet($tOperationdet);
    }

}
