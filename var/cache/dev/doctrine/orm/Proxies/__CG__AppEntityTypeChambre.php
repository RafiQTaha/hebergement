<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TypeChambre extends \App\Entity\TypeChambre implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\TypeChambre' . "\0" . 'id', '' . "\0" . 'App\\Entity\\TypeChambre' . "\0" . 'designation', '' . "\0" . 'App\\Entity\\TypeChambre' . "\0" . 'abreviation', '' . "\0" . 'App\\Entity\\TypeChambre' . "\0" . 'chambres', '' . "\0" . 'App\\Entity\\TypeChambre' . "\0" . 'active', '' . "\0" . 'App\\Entity\\TypeChambre' . "\0" . 'grilles', '' . "\0" . 'App\\Entity\\TypeChambre' . "\0" . 'pfrais'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\TypeChambre' . "\0" . 'id', '' . "\0" . 'App\\Entity\\TypeChambre' . "\0" . 'designation', '' . "\0" . 'App\\Entity\\TypeChambre' . "\0" . 'abreviation', '' . "\0" . 'App\\Entity\\TypeChambre' . "\0" . 'chambres', '' . "\0" . 'App\\Entity\\TypeChambre' . "\0" . 'active', '' . "\0" . 'App\\Entity\\TypeChambre' . "\0" . 'grilles', '' . "\0" . 'App\\Entity\\TypeChambre' . "\0" . 'pfrais'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TypeChambre $proxy) {
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
    public function getAbreviation(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbreviation', []);

        return parent::getAbreviation();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbreviation(?string $abreviation): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbreviation', [$abreviation]);

        return parent::setAbreviation($abreviation);
    }

    /**
     * {@inheritDoc}
     */
    public function getChambres(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChambres', []);

        return parent::getChambres();
    }

    /**
     * {@inheritDoc}
     */
    public function addChambre(\App\Entity\TChambre $chambre): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChambre', [$chambre]);

        return parent::addChambre($chambre);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChambre(\App\Entity\TChambre $chambre): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChambre', [$chambre]);

        return parent::removeChambre($chambre);
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
    public function setActive(?float $active): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrilles(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrilles', []);

        return parent::getGrilles();
    }

    /**
     * {@inheritDoc}
     */
    public function addGrille(\App\Entity\Grille $grille): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGrille', [$grille]);

        return parent::addGrille($grille);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGrille(\App\Entity\Grille $grille): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGrille', [$grille]);

        return parent::removeGrille($grille);
    }

    /**
     * {@inheritDoc}
     */
    public function getPfrais(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPfrais', []);

        return parent::getPfrais();
    }

    /**
     * {@inheritDoc}
     */
    public function addPfrai(\App\Entity\Pfrais $pfrai): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPfrai', [$pfrai]);

        return parent::addPfrai($pfrai);
    }

    /**
     * {@inheritDoc}
     */
    public function removePfrai(\App\Entity\Pfrais $pfrai): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePfrai', [$pfrai]);

        return parent::removePfrai($pfrai);
    }

}
