<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Phone;
use Symfony\Component\HttpFoundation\Response;


class PhoneController extends Controller
{
    /**
     * @Route("/addPhone")
     *
     */
    public function addPhoneAction(Request $request)
    {
        $phone=new Phone();
        $form=$this->createPhoneForm($phone);
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $newPhone=$form->getData();
            $em=$this->getDoctrine()->getManager();
            $em->persist($newPhone);
            $em->flush();
            return new \Symfony\Component\HttpFoundation\RedirectResponse('/showAll');
            
        }


        return $this->render('AppBundle:Phone:add_phone.html.twig', array(
                'form'=>$form->createView()
        ));
    }


    /**
     * @param Phone $phone
     * @return FormBuilder
     */
    public function createPhoneForm(Phone $phone)
    {
        $form=$this->createFormBuilder($phone)
            ->add('person','entity', array('class' => 'AppBundle:Person'))
            ->add('number','text')
            ->add('type', ChoiceType::class, array(
                'choices'  => array(
                    'Home' => 'home',
                    'Work' => 'work',
                    'Private' => 'private',
                )))
            ->add('save','submit')
            ->getForm();

        return $form;


    }

    /**
     * @Route("/editPhone/{id}")
     */
    public function editPhoneAction($id)
    {
        return $this->render('AppBundle:Phone:edit_phone.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deletePhone/{id}")
     */
    public function deletePhoneAction($id)
    {
        return $this->render('AppBundle:Phone:delete_phone.html.twig', array(
            // ...
        ));
    }

}
