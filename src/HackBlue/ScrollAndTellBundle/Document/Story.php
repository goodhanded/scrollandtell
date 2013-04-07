<?php
namespace HackBlue\ScrollAndTellBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Story
{
	/**
     * @MongoDB\Id
     */
    protected $id;

	/**
     * @MongoDB\String
     */
    protected $name;

	/**
     * @MongoDB\String
     */
    protected $bgImage;

	/**
     * @MongoDB\Timestamp
     */
    protected $created;

    /**
     * @MongoDB\ReferenceMany(targetDocument="Scene")
     */
    protected $scenes;
    public function __construct()
    {
        $this->scenes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * @return \Story
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
     * Set bgImage
     *
     * @param string $bgImage
     * @return \Story
     */
    public function setBgImage($bgImage)
    {
        $this->bgImage = $bgImage;
        return $this;
    }

    /**
     * Get bgImage
     *
     * @return string $bgImage
     */
    public function getBgImage()
    {
        return $this->bgImage;
    }

    /**
     * Set created
     *
     * @param timestamp $created
     * @return \Story
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return timestamp $created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Add scenes
     *
     * @param HackBlue\ScrollAndTellBundle\Document\Scene $scenes
     */
    public function addScene(\HackBlue\ScrollAndTellBundle\Document\Scene $scenes)
    {
        $this->scenes[] = $scenes;
    }

    /**
    * Remove scenes
    *
    * @param <variableType$scenes
    */
    public function removeScene(\HackBlue\ScrollAndTellBundle\Document\Scene $scenes)
    {
        $this->scenes->removeElement($scenes);
    }

    /**
     * Get scenes
     *
     * @return Doctrine\Common\Collections\Collection $scenes
     */
    public function getScenes()
    {
        return $this->scenes;
    }
}
