<?php

namespace url\UrlGenerateShortBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as DBLoad;


/**
 *
 * @DBLoad\Document
 */
class shortUrlDB
{

    /**
     * @DBLoad\Id
     */
    protected $id;


    /**
     * @DBLoad\Field(type="string")
     */
    protected $fullUrl;


    /**
     * @DBLoad\Field(type="string")
     */
    protected $shortUrl;


    /**
     * @DBLoad\Field(type="string")
     */
    protected $nameUrl;

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
     * Set fullUrl
     *
     * @param string $fullUrl
     * @return $this
     */
    public function setFullUrl($fullUrl)
    {
        $this->fullUrl = $fullUrl;
        return $this;
    }

    /**
     * Get fullUrl
     *
     * @return string $fullUrl
     */
    public function getFullUrl()
    {
        return $this->fullUrl;
    }

    /**
     * Set shortUrl
     *
     * @param string $shortUrl
     * @return $this
     */
    public function setShortUrl($shortUrl)
    {
        $this->shortUrl = $shortUrl;
        return $this;
    }

    /**
     * Get shortUrl
     *
     * @return string $shortUrl
     */
    public function getShortUrl()
    {
        return $this->shortUrl;
    }

    /**
     * Set nameUrl
     *
     * @param string $nameUrl
     * @return $this
     */
    public function setNameUrl($nameUrl)
    {
        $this->nameUrl = $nameUrl;
        return $this;
    }

    /**
     * Get nameUrl
     *
     * @return string $nameUrl
     */
    public function getNameUrl()
    {
        return $this->nameUrl;
    }
}
