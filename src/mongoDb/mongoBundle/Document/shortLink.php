<?php
namespace mongoDb\mongoBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */

class shortLink{

    /**
    * @MongoDB\Id
    */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $name;


    /**
     * @MongoDB\Field(type="string")
     */
    protected $oldUrl;


    /**
     * @MongoDB\Field(type="string")
     */

    protected $shortUrl;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $userAddId;



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
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set oldUrl
     *
     * @param string $oldUrl
     * @return $this
     */
    public function setOldUrl($oldUrl)
    {
        $this->oldUrl = $oldUrl;
        return $this;
    }

    /**
     * Get oldUrl
     *
     * @return string $oldUrl
     */
    public function getOldUrl()
    {
        return $this->oldUrl;
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
     * Set userAddId
     *
     * @param string $userAddId
     * @return $this
     */
    public function setUserAddId($userAddId)
    {
        $this->userAddId = $userAddId;
        return $this;
    }

    /**
     * Get userAddId
     *
     * @return string $userAddId
     */
    public function getUserAddId()
    {
        return $this->userAddId;
    }
}
