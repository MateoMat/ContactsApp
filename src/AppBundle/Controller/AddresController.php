<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Addres;
use AppBundle\Entity\Person;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AddresController extends Controller
{
    /**
     * @Route("/newAddres",name="newAddres")
     */
    public function newAddresAction(Request $request)
    {
        $addres = new Addres();
        $url=$this->generateUrl('newAddres');
        $form=$this->createAddresAction($addres, $url);
        


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $newAddres = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($newAddres);
            $em->flush();

            return new \Symfony\Component\HttpFoundation\RedirectResponse('/showAll');
        }
        
        return $this->render('AppBundle:Addres:new_addres.html.twig', array(
            'form'=>$form->createView()
        ));
    }
    
    
    private function createAddresAction(Addres $addres, $url) {



        $form = $this->createFormBuilder($addres)
                ->add('city', 'text')
                ->add('street', 'text', array(
                    'required' => true,
                    'label' => 'Podaj nazwisko'
                ))
                ->add('number1', 'text')
                ->add('number2', 'text')
                ->add('person','entity',array('class'=>'AppBundle:Person'))
                ->add('save', 'submit', array('label' => 'Zapisz użytkownika'))
                ->getForm();

        return $form;
    }
    
    
    
    
    

    /**
     * @Route("/editAddres/{id}")
     */
    public function editAddresAction($id)
    {
        return $this->render('AppBundle:Addres:edit_addres.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deleteAddres/{id}")
     */
    public function deleteAddresAction($id)
    {
        return $this->render('AppBundle:Addres:delete_addres.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showAllAddres")
     */
    public function showAllAddresAction()
    {
        return $this->render('AppBundle:Addres:show_all_addres.html.twig', array(
            // ...
        ));
    }

}
