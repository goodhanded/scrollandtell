<?php
namespace HackBlue\ScrollAndTellBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class OpacityEffect
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
    protected $opacityStart;

    /**
     * @MongoDB\Int
     */
    protected $opacityEnd;


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
     * @return \OpacityEffect
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
     * @return \OpacityEffect
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
     * Set opacityStart
     *
     * @param int $opacityStart
     * @return \OpacityEffect
     */
    public function setOpacityStart($opacityStart)
    {
        $this->opacityStart = $opacityStart;
        return $this;
    }

    /**
     * Get opacityStart
     *
     * @return int $opacityStart
     */
    public function getOpacityStart()
    {
        return $this->opacityStart;
    }

    /**
     * Set opacityEnd
     *
     * @param int $opacityEnd
     * @return \OpacityEffect
     */
    public function setOpacityEnd($opacityEnd)
    {
        $this->opacityEnd = $opacityEnd;
        return $this;
    }

    /**
     * Get opacityEnd
     *
     * @return int $opacityEnd
     */
    public function getOpacityEnd()
    {
        return $this->opacityEnd;
    }
}
