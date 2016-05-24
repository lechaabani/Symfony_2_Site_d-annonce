<?php

namespace Proxies\__CG__\Sa\SiteBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \Sa\SiteBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'username', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'salt', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'nom', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'prenom', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'cp', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'ville', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'avatar', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'isNewsletter', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'isDesactiver', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'date_created', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'date_updated', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'departement', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'role', 'annonces');
        }

        return array('__isInitialized__', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'username', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'salt', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'nom', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'prenom', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'cp', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'ville', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'avatar', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'isNewsletter', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'isDesactiver', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'date_created', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'date_updated', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'departement', '' . "\0" . 'Sa\\SiteBundle\\Entity\\User' . "\0" . 'role', 'annonces');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function addAnnonce(\Sa\SiteBundle\Entity\Annonce $annonces)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAnnonce', array($annonces));

        return parent::addAnnonce($annonces);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAnnonce(\Sa\SiteBundle\Entity\Annonce $annonces)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAnnonce', array($annonces));

        return parent::removeAnnonce($annonces);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnnonces()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnnonces', array());

        return parent::getAnnonces();
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
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', array($username));

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', array());

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatar($avatar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatar', array($avatar));

        return parent::setAvatar($avatar);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatar', array());

        return parent::getAvatar();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalt($salt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalt', array($salt));

        return parent::setSalt($salt);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', array());

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', array($prenom));

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', array());

        return parent::getPrenom();
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
    public function setIsNewsletter($isNewsletter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsNewsletter', array($isNewsletter));

        return parent::setIsNewsletter($isNewsletter);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsNewsletter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsNewsletter', array());

        return parent::getIsNewsletter();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDesactiver($isDesactiver)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDesactiver', array($isDesactiver));

        return parent::setIsDesactiver($isDesactiver);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsDesactiver()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsDesactiver', array());

        return parent::getIsDesactiver();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($date_created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', array($date_created));

        return parent::setCreated($date_created);
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
    public function setUpdate($date_updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdate', array($date_updated));

        return parent::setUpdate($date_updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdate', array());

        return parent::getUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function addDepartement(\Sa\SiteBundle\Entity\Departement $departement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDepartement', array($departement));

        return parent::addDepartement($departement);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDepartement(\Sa\SiteBundle\Entity\Departement $departement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDepartement', array($departement));

        return parent::removeDepartement($departement);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartement', array());

        return parent::getDepartement();
    }

    /**
     * {@inheritDoc}
     */
    public function addRole(\Sa\SiteBundle\Entity\Role $role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRole', array($role));

        return parent::addRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRole(\Sa\SiteBundle\Entity\Role $role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRole', array($role));

        return parent::removeRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', array());

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', array());

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', array());

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', array());

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', array($serialized));

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function isEqualTo(\Symfony\Component\Security\Core\User\UserInterface $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEqualTo', array($user));

        return parent::isEqualTo($user);
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', array());

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', array());

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', array());

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', array());

        return parent::isEnabled();
    }

}
