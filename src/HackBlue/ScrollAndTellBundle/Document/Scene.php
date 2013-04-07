<?php
namespace HackBlue\ScrollAndTellBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Scene
{
	/**
     * @MongoDB\Id
     */
    protected $id;

	/**
     * @MongoDB\Int
     */
    protected $order;

	/**
     * @MongoDB\Int
     */
    protected $height;

    /**
     * @MongoDB\Int
     */
    protected $duration;

    /**
     * @MongoDB\ReferenceMany(targetDocument="Image")
     */
    protected $images;
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set order
     *
     * @param int $order
     * @return \Scene
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Get order
     *
     * @return int $order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set height
     *
     * @param int $height
     * @return \Scene
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Get height
     *
     * @return int $height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set duration
     *
     * @param int $duration
     * @return \Scene
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Get duration
     *
     * @return int $duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Add images
     *
     * @param HackBlue\ScrollAndTellBundle\Document\Image $images
     */
    public function addImage(\HackBlue\ScrollAndTellBundle\Document\Image $images)
    {
        $this->images[] = $images;
    }

    /**
    * Remove images
    *
    * @param <variableType$images
    */
    public function removeImage(\HackBlue\ScrollAndTellBundle\Document\Image $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return Doctrine\Common\Collections\Collection $images
     */
    public function getImages()
    {
        return $this->images;
    }
}
