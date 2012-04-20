<?php

namespace Hermes\Bundle\HermesBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Hermes\Bundle\HermesBundle\Entity\Subscriber
 * Contains subscribers who are stored by mongodb
 *
 * @MongoDB\Document(collection="subscriber")
 */
class Subscriber {

    /**
     * @var string $id
     * @MongoDB\Id
     */
    private $id;

    /**
     * @var string $email
     * 
     * @MongoDB\String
     */
    private $email;

    /**
     * @var string $locale
     *
     * @MongoDB\String
     */
    private $locale;

    /**
     * @var string $list
     *
     * @MongoDB\String
     */
    private $list;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set locale
     *
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * Get locale
     *
     * @return string $locale
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set list
     *
     * @param string $list
     */
    public function setList($list)
    {
        $this->list = $list;
    }

    /**
     * Get list
     *
     * @return string $list
     */
    public function getList()
    {
        return $this->list;
    }
}
