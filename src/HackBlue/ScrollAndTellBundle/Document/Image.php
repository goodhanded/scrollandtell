<?php
namespace HackBlue\ScrollAndTellBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Image
{
	/**
     * @MongoDB\Id
     */
    protected $id;

	/**
     * @MongoDB\String
     */
    protected $url;

	/**
     * @MongoDB\Int
     */
    protected $x;

    /**
     * @MongoDB\Int
     */
    protected $y;

    /**
     * @MongoDB\Int
     */
    protected $z;

    /**
     * @MongoDB\Int
     */
    protected $width;

    /**
     * @MongoDB\Int
     */
    protected $height;

    /**
     * @MongoDB\Int
     */
    protected $duration;

    /**
     * @MongoDB\ReferenceOne(targetDocument="TranslationEffect")
     */
    protected $translationEffect;

    /**
     * @MongoDB\ReferenceOne(targetDocument="RotationEffect")
     */
    protected $rotationEffect;

    /**
     * @MongoDB\ReferenceOne(targetDocument="ScaleEffect")
     */
    protected $scaleEffect;

    /**
     * @MongoDB\ReferenceOne(targetDocument="OpacityEffect")
     */
    protected $opacityEffect;


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
     * Set url
     *
     * @param string $url
     * @return \Image
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Get url
     *
     * @return string $url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set x
     *
     * @param int $x
     * @return \Image
     */
    public function setX($x)
    {
        $this->x = $x;
        return $this;
    }

    /**
     * Get x
     *
     * @return int $x
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param int $y
     * @return \Image
     */
    public function setY($y)
    {
        $this->y = $y;
        return $this;
    }

    /**
     * Get y
     *
     * @return int $y
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set z
     *
     * @param int $z
     * @return \Image
     */
    public function setZ($z)
    {
        $this->z = $z;
        return $this;
    }

    /**
     * Get z
     *
     * @return int $z
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * Set width
     *
     * @param int $width
     * @return \Image
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Get width
     *
     * @return int $width
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param int $height
     * @return \Image
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
     * @return \Image
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
     * Set translationEffect
     *
     * @param HackBlue\ScrollAndTellBundle\Document\TranslationEffect $translationEffect
     * @return \Image
     */
    public function setTranslationEffect(\HackBlue\ScrollAndTellBundle\Document\TranslationEffect $translationEffect)
    {
        $this->translationEffect = $translationEffect;
        return $this;
    }

    /**
     * Get translationEffect
     *
     * @return HackBlue\ScrollAndTellBundle\Document\TranslationEffect $translationEffect
     */
    public function getTranslationEffect()
    {
        return $this->translationEffect;
    }

    /**
     * Set rotationEffect
     *
     * @param HackBlue\ScrollAndTellBundle\Document\RotationEffect $rotationEffect
     * @return \Image
     */
    public function setRotationEffect(\HackBlue\ScrollAndTellBundle\Document\RotationEffect $rotationEffect)
    {
        $this->rotationEffect = $rotationEffect;
        return $this;
    }

    /**
     * Get rotationEffect
     *
     * @return HackBlue\ScrollAndTellBundle\Document\RotationEffect $rotationEffect
     */
    public function getRotationEffect()
    {
        return $this->rotationEffect;
    }

    /**
     * Set scaleEffect
     *
     * @param HackBlue\ScrollAndTellBundle\Document\ScaleEffect $scaleEffect
     * @return \Image
     */
    public function setScaleEffect(\HackBlue\ScrollAndTellBundle\Document\ScaleEffect $scaleEffect)
    {
        $this->scaleEffect = $scaleEffect;
        return $this;
    }

    /**
     * Get scaleEffect
     *
     * @return HackBlue\ScrollAndTellBundle\Document\ScaleEffect $scaleEffect
     */
    public function getScaleEffect()
    {
        return $this->scaleEffect;
    }

    /**
     * Set opacityEffect
     *
     * @param HackBlue\ScrollAndTellBundle\Document\OpacityEffect $opacityEffect
     * @return \Image
     */
    public function setOpacityEffect(\HackBlue\ScrollAndTellBundle\Document\OpacityEffect $opacityEffect)
    {
        $this->opacityEffect = $opacityEffect;
        return $this;
    }

    /**
     * Get opacityEffect
     *
     * @return HackBlue\ScrollAndTellBundle\Document\OpacityEffect $opacityEffect
     */
    public function getOpacityEffect()
    {
        return $this->opacityEffect;
    }
}
