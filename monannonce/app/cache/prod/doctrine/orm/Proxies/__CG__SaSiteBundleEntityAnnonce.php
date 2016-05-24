<?php

namespace Proxies\__CG__\Sa\SiteBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Annonce extends \Sa\SiteBundle\Entity\Annonce implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return array('__isInitialized__', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'id', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'titre', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'description', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'nbrPlace', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'isActive', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'isRefuser', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'adresse', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'ville', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'cp', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'dateDebut', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'dateFin', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'updated', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'created', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'user', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'annonceType');
        }

        return array('__isInitialized__', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'id', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'titre', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'description', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'nbrPlace', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'isActive', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'isRefuser', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'adresse', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'ville', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'cp', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'dateDebut', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'dateFin', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'updated', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'created', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'user', '' . "\0" . 'Sa\\SiteBundle\\Entity\\Annonce' . "\0" . 'annonceType');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Annonce $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', array($titre));

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', array());

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbrPlace($nbrPlace)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbrPlace', array($nbrPlace));

        return parent::setNbrPlace($nbrPlace);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbrPlace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbrPlace', array());

        return parent::getNbrPlace();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', array($isActive));

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', array());

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsRefuser($isRefuser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsRefuser', array($isRefuser));

        return parent::setIsRefuser($isRefuser);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsRefuser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsRefuser', array());

        return parent::getIsRefuser();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', array($adresse));

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', array());

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille($ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', array($ville));

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', array());

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setCp($cp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCp', array($cp));

        return parent::setCp($cp);
    }

    /**
     * {@inheritDoc}
     */
    public function getCp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCp', array());

        return parent::getCp();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebut($dateDebut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebut', array($dateDebut));

        return parent::setDateDebut($dateDebut);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebut', array());

        return parent::getDateDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFin($dateFin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFin', array($dateFin));

        return parent::setDateFin($dateFin);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFin', array());

        return parent::getDateFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated($updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', array($updated));

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', array());

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', array($created));

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', array());

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Sa\SiteBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnnonceType(\Sa\SiteBundle\Entity\AnnonceType $annonceType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnnonceType', array($annonceType));

        return parent::setAnnonceType($annonceType);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnnonceType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnnonceType', array());

        return parent::getAnnonceType();
    }

}
