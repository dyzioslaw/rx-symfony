<?php

namespace Warsztaty\FilterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AttributeRelation
 */
class AttributeRelation
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
    private $idRelation;

    /**
     * @var \Warsztaty\FilterBundle\Entity\Attributes
     */
    private $idAttribute;

    /**
     * @var \Warsztaty\FilterBundle\Entity\AttributeValues
     */
    private $idValue;


    /**
     * Get idRelation
     *
     * @return integer 
     */
    public function getIdRelation()
    {
        return $this->idRelation;
    }

    /**
     * Set idAttribute
     *
     * @param \Warsztaty\FilterBundle\Entity\Attributes $idAttribute
     * @return AttributeRelation
     */
    public function setIdAttribute(\Warsztaty\FilterBundle\Entity\Attributes $idAttribute = null)
    {
        $this->idAttribute = $idAttribute;

        return $this;
    }

    /**
     * Get idAttribute
     *
     * @return \Warsztaty\FilterBundle\Entity\Attributes 
     */
    public function getIdAttribute()
    {
        return $this->idAttribute;
    }

    /**
     * Set idValue
     *
     * @param \Warsztaty\FilterBundle\Entity\AttributeValues $idValue
     * @return AttributeRelation
     */
    public function setIdValue(\Warsztaty\FilterBundle\Entity\AttributeValues $idValue = null)
    {
        $this->idValue = $idValue;

        return $this;
    }

    /**
     * Get idValue
     *
     * @return \Warsztaty\FilterBundle\Entity\AttributeValues 
     */
    public function getIdValue()
    {
        return $this->idValue;
    }
}
