<?php

namespace Warsztaty\FilterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsCombination
 */
class ProductsCombination
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
    private $idCombination;

    /**
     * @var \Warsztaty\FilterBundle\Entity\Products
     */
    private $idProduct;

    /**
     * @var \Warsztaty\FilterBundle\Entity\AttributeRelation
     */
    private $idRelation;


    /**
     * Get idCombination
     *
     * @return integer 
     */
    public function getIdCombination()
    {
        return $this->idCombination;
    }

    /**
     * Set idProduct
     *
     * @param \Warsztaty\FilterBundle\Entity\Products $idProduct
     * @return ProductsCombination
     */
    public function setIdProduct(\Warsztaty\FilterBundle\Entity\Products $idProduct = null)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get idProduct
     *
     * @return \Warsztaty\FilterBundle\Entity\Products 
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set idRelation
     *
     * @param \Warsztaty\FilterBundle\Entity\AttributeRelation $idRelation
     * @return ProductsCombination
     */
    public function setIdRelation(\Warsztaty\FilterBundle\Entity\AttributeRelation $idRelation = null)
    {
        $this->idRelation = $idRelation;

        return $this;
    }

    /**
     * Get idRelation
     *
     * @return \Warsztaty\FilterBundle\Entity\AttributeRelation 
     */
    public function getIdRelation()
    {
        return $this->idRelation;
    }
}
