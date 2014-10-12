<?php

namespace Warsztaty\FilterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Warsztaty\FilterBundle\Form\AttributesManager\Type;

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

    public function editAction($id, Request $request)
    {
        $getData = $this->getDoctrine()
            ->getRepository('WarsztatyFilterBundle:Attributes')
            ->findOneByIdAttribute($id);

        if (!$getData) {
            throw $this->createNotFoundException('Attribute not exists.');
        }

        // Form
        $form = $this->createForm(new Type(), $getData);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid())
            {
                $em = $this->getDoctrine()
                    ->getManager();
                $em->persist($getData);
                $em->flush();

                return $this->redirect($this->generateUrl('warsztaty_filter_attributes_manager_edit', array(
                    'id' => $id
                )));
            }
        }

        return $this->render('WarsztatyFilterBundle:AttributesManager:edit.html.twig', array(
            'data' => $getData,
            'form' => $form->createView()
        ));
    }
}
