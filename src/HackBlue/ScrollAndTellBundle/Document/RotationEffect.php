<?php
namespace HackBlue\ScrollAndTellBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class RotationEffect
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
    protected $angle;

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
     * @return \RotationEffect
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
     * @return \RotationEffect
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
     * Set angle
     *
     * @param int $angle
     * @return \RotationEffect
     */
    public function setAngle($angle)
    {
        $this->angle = $angle;
        return $this;
    }

    /**
     * Get angle
     *
     * @return int $angle
     */
    public function getAngle()
    {
        return $this->angle;
    }
}
