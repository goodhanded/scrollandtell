<?php
namespace HackBlue\ScrollAndTellBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class ScaleEffect
{
	/**
     * @MongoDB\Id
     */
    protected $id;

	/**
     * @MongoDB\Int
     */
    protected $sceneStart;

	/**
     * @MongoDB\Int
     */
    protected $sceneEnd;

    /**
     * @MongoDB\Int
     */
    protected $scaleStart;

    /**
     * @MongoDB\Int
     */
    protected $scaleEnd;


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
     * Set sceneStart
     *
     * @param int $sceneStart
     * @return \ScaleEffect
     */
    public function setSceneStart($sceneStart)
    {
        $this->sceneStart = $sceneStart;
        return $this;
    }

    /**
     * Get sceneStart
     *
     * @return int $sceneStart
     */
    public function getSceneStart()
    {
        return $this->sceneStart;
    }

    /**
     * Set sceneEnd
     *
     * @param int $sceneEnd
     * @return \ScaleEffect
     */
    public function setSceneEnd($sceneEnd)
    {
        $this->sceneEnd = $sceneEnd;
        return $this;
    }

    /**
     * Get sceneEnd
     *
     * @return int $sceneEnd
     */
    public function getSceneEnd()
    {
        return $this->sceneEnd;
    }

    /**
     * Set scaleStart
     *
     * @param int $scaleStart
     * @return \ScaleEffect
     */
    public function setScaleStart($scaleStart)
    {
        $this->scaleStart = $scaleStart;
        return $this;
    }

    /**
     * Get scaleStart
     *
     * @return int $scaleStart
     */
    public function getScaleStart()
    {
        return $this->scaleStart;
    }

    /**
     * Set scaleEnd
     *
     * @param int $scaleEnd
     * @return \ScaleEffect
     */
    public function setScaleEnd($scaleEnd)
    {
        $this->scaleEnd = $scaleEnd;
        return $this;
    }

    /**
     * Get scaleEnd
     *
     * @return int $scaleEnd
     */
    public function getScaleEnd()
    {
        return $this->scaleEnd;
    }
}
