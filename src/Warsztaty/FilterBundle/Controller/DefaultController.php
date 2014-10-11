<?php

namespace Warsztaty\FilterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $getAttributesList = $this->getDoctrine()
            ->getRepository('WarsztatyFilterBundle:Attributes')
            ->getStartAttributesData();

        $getAttributeMap = $this->getDoctrine()
            ->getRepository('WarsztatyFilterBundle:Attributes')
            ->getAttributeMap();

        return $this->render('WarsztatyFilterBundle:Default:index.html.twig', array(
            'getAttributesList' => $getAttributesList,
            'getAttributeMap' => $getAttributeMap
        ));
    }

    public function listAction(Request $request)
    {
        if (false === $request->isXmlHttpRequest() OR $request->getMethod() !== 'POST')
        {
            return new RedirectResponse(
                $this->generateUrl('warsztaty_filter_homepage')
            );
        }

        $list = $this->getDoctrine()
            ->getRepository('WarsztatyFilterBundle:ProductsCombination')
            ->getProductsByCombinationsParams($request->query->all());
        $view = $this->render('WarsztatyFilterBundle:Default:list.html.twig', array(
            'list' => $list
        ));

        return new JsonResponse(array(
            'status' => true,
            'html' => $view->getContent()
        ));
    }
}
