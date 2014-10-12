<?php

namespace Warsztaty\FilterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AttributesManagerController extends Controller
{
    public function indexAction()
    {
        $getList = $this->getDoctrine()
            ->getRepository('WarsztatyFilterBundle:Attributes')
            ->findAll();

        return $this->render('WarsztatyFilterBundle:AttributesManager:index.html.twig', array(
            'list' => $getList
        ));
    }

    public function editAction($id)
    {
        $getData = $this->getDoctrine()
            ->getRepository('WarsztatyFilterBundle:Attributes')
            ->findByIdAttribute($id);

        if (!$getData) {
            throw $this->createNotFoundException('Attribute not exists.');
        }

        return $this->render('WarsztatyFilterBundle:AttributesManager:edit.html.twig', array(
            'data' => $getData
        ));
    }
}
