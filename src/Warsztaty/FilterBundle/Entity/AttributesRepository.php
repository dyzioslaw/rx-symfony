<?php

namespace Warsztaty\FilterBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * AttributesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AttributesRepository extends EntityRepository
{
    /**
     * Return attributes data with values from front page.
     * In feature add cache mechanism for production [!!!]
     *
     * @return array
     */
    public function getStartAttributesData()
    {
        $attributesDataList = array();
        $attributesData = $this->getEntityManager()
            ->createQueryBuilder()
            ->select('a')
            ->from('WarsztatyFilterBundle:Attributes', 'a')
            ->add('where', $this->getEntityManager()->getExpressionBuilder()->in('a.idAttribute', ':idAttributes'))
            ->orderBy('a.idAttribute', 'ASC')
            ->setParameter('idAttributes', $this->getStartPageAttributesIds())
            ->getQuery()
            ->getArrayResult();

        if ($attributesData)
        {
            foreach ($attributesData as $attribute)
            {
                $getValues = $this->getEntityManager()
                    ->createQueryBuilder()
                    ->select('IDENTITY(r.idValue)', 'v.value')
                    ->from('WarsztatyFilterBundle:AttributeRelation', 'r')
                    ->leftJoin('WarsztatyFilterBundle:AttributeValues', 'v', 'WITH', 'r.idValue=v.idValue')
                    ->where('r.idAttribute = :id_attribute')
                    ->setParameter('id_attribute', $attribute['idAttribute'])
                    ->getQuery()
                    ->getArrayResult();

                $attribute['values'] = $getValues;
                $attributesDataList[$attribute['idAttribute']] = $attribute;
            }
        }

        return $attributesDataList;
    }

    /**
     * Helper. Return attributes ids for front page.
     *
     * @return array
     */
    public function getStartPageAttributesIds()
    {
        return array(
            $this->getAttributeMap('surface'),
            $this->getAttributeMap('technology'),
            $this->getAttributeMap('jons'),
            $this->getAttributeMap('artherapy'),
            $this->getAttributeMap('warmfog'),
            $this->getAttributeMap('higro')
        );
    }

    /**
     * Helper for frontend develoeprs - attributes mask.
     * Array with attribute slug => id attribute
     *
     * @param bool|int $id_attribute
     * @return bool|array
     */
    public function getAttributeMap($id_attribute = false)
    {
        $map = array(
            'surface' => 1,
            'higro' => 2,
            'jons' => 3,
            'warmfog' => 4,
            'artherapy' => 5,
            'color' => 6,
            'width' => 7,
            'height' => 8,
            'depth' => 9,
            'power' => 10,
            'tank-capacity' => 11,
            'number-of-degrees' => 12,
            'wydajnosc' => 13,
            'performance' => 14,
            'auto-stop' => 15,
            'volume' => 16,
            'light' => 17,
            'guarantee' => 18,
            'filter' => 19,
            'extra-options' => 20,
            'supplied' => 21,
            'technology' => 22
        );

        return (false == $id_attribute ? $map : (array_key_exists($id_attribute, $map) ? $map[$id_attribute] : false));
    }
}