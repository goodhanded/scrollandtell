<?php
namespace HackBlue\ScrollAndTellBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class TranslationEffect
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
    protected $x1;

    /**
     * @MongoDB\Int
     */
    protected $y1;

    /**
     * @MongoDB\Int
     */
    protected $x2;

    /**
     * @MongoDB\Int
     */
    protected $y2;

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
     * @return \TranslationEffect
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
     * @return \TranslationEffect
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
     * Set x1
     *
     * @param int $x1
     * @return \TranslationEffect
     */
    public function setX1($x1)
    {
        $this->x1 = $x1;
        return $this;
    }

    /**
     * Get x1
     *
     * @return int $x1
     */
    public function getX1()
    {
        return $this->x1;
    }

    /**
     * Set y1
     *
     * @param int $y1
     * @return \TranslationEffect
     */
    public function setY1($y1)
    {
        $this->y1 = $y1;
        return $this;
    }

    /**
     * Get y1
     *
     * @return int $y1
     */
    public function getY1()
    {
        return $this->y1;
    }

    /**
     * Set x2
     *
     * @param int $x2
     * @return \TranslationEffect
     */
    public function setX2($x2)
    {
        $this->x2 = $x2;
        return $this;
    }

    /**
     * Get x2
     *
     * @return int $x2
     */
    public function getX2()
    {
        return $this->x2;
    }

    /**
     * Set y2
     *
     * @param int $y2
     * @return \TranslationEffect
     */
    public function setY2($y2)
    {
        $this->y2 = $y2;
        return $this;
    }

    /**
     * Get y2
     *
     * @return int $y2
     */
    public function getY2()
    {
        return $this->y2;
    }
}
