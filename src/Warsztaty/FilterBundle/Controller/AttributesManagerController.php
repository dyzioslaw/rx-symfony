<?php

namespace Warsztaty\FilterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
//        $getData = $this->getDoctrine()
//            ->getRepository('WarsztatyFilterBundle:Attributes')

        $getData = array();
        return $this->render('WarsztatyFilterBundle:AttributesManager:edit.html.twig', array(
            'data' => $getData
        ));
    }
}
