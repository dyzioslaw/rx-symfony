<?php

namespace Warsztaty\FilterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AttributeValues
 */
class AttributeValues
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
    private $idValue;

    /**
     * @var string
     */
    private $value;


    /**
     * Get idValue
     *
     * @return integer 
     */
    public function getIdValue()
    {
        return $this->idValue;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return AttributeValues
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
}
