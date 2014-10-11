<?php

namespace Warsztaty\FilterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 */
class Products
{
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var boolean
     */
    private $isAvailable;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $exploitationCost;

    /**
     * @var string
     */
    private $coverImagePath;

    /**
     * @var string
     */
    private $galleryUri;

    /**
     * @var string
     */
    private $movieUri;


    /**
     * Get idProduct
     *
     * @return integer 
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set isAvailable
     *
     * @param boolean $isAvailable
     * @return Products
     */
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    /**
     * Get isAvailable
     *
     * @return boolean 
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Products
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Products
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set exploitationCost
     *
     * @param string $exploitationCost
     * @return Products
     */
    public function setExploitationCost($exploitationCost)
    {
        $this->exploitationCost = $exploitationCost;

        return $this;
    }

    /**
     * Get exploitationCost
     *
     * @return string 
     */
    public function getExploitationCost()
    {
        return $this->exploitationCost;
    }

    /**
     * Set coverImagePath
     *
     * @param string $coverImagePath
     * @return Products
     */
    public function setCoverImagePath($coverImagePath)
    {
        $this->coverImagePath = $coverImagePath;

        return $this;
    }

    /**
     * Get coverImagePath
     *
     * @return string 
     */
    public function getCoverImagePath()
    {
        return $this->coverImagePath;
    }

    /**
     * Set galleryUri
     *
     * @param string $galleryUri
     * @return Products
     */
    public function setGalleryUri($galleryUri)
    {
        $this->galleryUri = $galleryUri;

        return $this;
    }

    /**
     * Get galleryUri
     *
     * @return string 
     */
    public function getGalleryUri()
    {
        return $this->galleryUri;
    }

    /**
     * Set movieUri
     *
     * @param string $movieUri
     * @return Products
     */
    public function setMovieUri($movieUri)
    {
        $this->movieUri = $movieUri;

        return $this;
    }

    /**
     * Get movieUri
     *
     * @return string 
     */
    public function getMovieUri()
    {
        return $this->movieUri;
    }
}
