<?php

namespace Hart\SeoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * @ORM\Entity
 * @ORM\Table(name="meta_translations")
 */
class SeoTranslation
{
    use ORMBehaviors\Translatable\Translation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $title;

    /**
     * @ORM\Column(type="text")
     */
    protected $subtitle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $meta_title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $meta_author;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $meta_description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $meta_keywords;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $meta_robots;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $meta_revised;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $meta_extradata;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $og_type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $og_title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $og_description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $og_image;

    /**
     * Set title
     *
     * @param  string         $title
     * @return SeoTranslation
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set subtitle
     *
     * @param  string         $subtitle
     * @return SeoTranslation
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get subtitle
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set meta_title
     *
     * @param  string         $metaTitle
     * @return SeoTranslation
     */
    public function setMetaTitle($metaTitle)
    {
        $this->meta_title = $metaTitle;

        return $this;
    }

    /**
     * Get meta_title
     *
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->meta_title;
    }

    /**
     * Set meta_author
     *
     * @param  string         $metaAuthor
     * @return SeoTranslation
     */
    public function setMetaAuthor($metaAuthor)
    {
        $this->meta_author = $metaAuthor;

        return $this;
    }

    /**
     * Get meta_author
     *
     * @return string
     */
    public function getMetaAuthor()
    {
        return $this->meta_author;
    }

    /**
     * Set meta_description
     *
     * @param  string         $metaDescription
     * @return SeoTranslation
     */
    public function setMetaDescription($metaDescription)
    {
        $this->meta_description = $metaDescription;

        return $this;
    }

    /**
     * Get meta_description
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->meta_description;
    }

    /**
     * Set meta_keywords
     *
     * @param  string         $metaKeywords
     * @return SeoTranslation
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->meta_keywords = $metaKeywords;

        return $this;
    }

    /**
     * Get meta_keywords
     *
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->meta_keywords;
    }

    /**
     * Set meta_robots
     *
     * @param  string         $metaRobots
     * @return SeoTranslation
     */
    public function setMetaRobots($metaRobots)
    {
        $this->meta_robots = $metaRobots;

        return $this;
    }

    /**
     * Get meta_robots
     *
     * @return string
     */
    public function getMetaRobots()
    {
        return $this->meta_robots;
    }

    /**
     * Set meta_revised
     *
     * @param  string         $metaRevised
     * @return SeoTranslation
     */
    public function setMetaRevised($metaRevised)
    {
        $this->meta_revised = $metaRevised;

        return $this;
    }

    /**
     * Get meta_revised
     *
     * @return string
     */
    public function getMetaRevised()
    {
        return $this->meta_revised;
    }

    /**
     * Set meta_extradata
     *
     * @param  string         $metaExtradata
     * @return SeoTranslation
     */
    public function setMetaExtradata($metaExtradata)
    {
        $this->meta_extradata = $metaExtradata;

        return $this;
    }

    /**
     * Get meta_extradata
     *
     * @return string
     */
    public function getMetaExtradata()
    {
        return $this->meta_extradata;
    }

    /**
     * Set og_type
     *
     * @param  string         $ogType
     * @return SeoTranslation
     */
    public function setOgType($ogType)
    {
        $this->og_type = $ogType;

        return $this;
    }

    /**
     * Get og_type
     *
     * @return string
     */
    public function getOgType()
    {
        return $this->og_type;
    }

    /**
     * Set og_title
     *
     * @param  string         $ogTitle
     * @return SeoTranslation
     */
    public function setOgTitle($ogTitle)
    {
        $this->og_title = $ogTitle;

        return $this;
    }

    /**
     * Get og_title
     *
     * @return string
     */
    public function getOgTitle()
    {
        return $this->og_title;
    }

    /**
     * Set og_description
     *
     * @param  string         $ogDescription
     * @return SeoTranslation
     */
    public function setOgDescription($ogDescription)
    {
        $this->og_description = $ogDescription;

        return $this;
    }

    /**
     * Get og_description
     *
     * @return string
     */
    public function getOgDescription()
    {
        return $this->og_description;
    }

    /**
     * Set og_image
     *
     * @param  string         $ogImage
     * @return SeoTranslation
     */
    public function setOgImage($ogImage)
    {
        $this->og_image = $ogImage;

        return $this;
    }

    /**
     * Get og_image
     *
     * @return string
     */
    public function getOgImage()
    {
        return $this->og_image;
    }
}
