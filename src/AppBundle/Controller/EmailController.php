<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\FormBuilder;
use AppBundle\Entity\Email;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class EmailController extends Controller
{
    /**
     * @Route("/addEmail",name="addEmail")
     */
    public function addEmailAction(Request $request)
    {
        $email=new Email();
        $form=$this->createEmailFormAction($email);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $newEmail=$form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($newEmail);
            $em->flush();

            return new \Symfony\Component\HttpFoundation\RedirectResponse('/showAll');
        }
        
        
        
        return $this->render('AppBundle:Email:add_email.html.twig', array(
            'form'=>$form->createView()
        ));
    }
    
    public function createEmailFormAction(Email $email)
    {
        $form=$this->createFormBuilder($email)
                ->add('person','entity', array('class' => 'AppBundle:Person'))
                ->add('email','text')
                ->add('type','text',array('label'=>'Podaj typ adresu'))
                ->add('save','submit',array('label'=>'Zapisz'))
                ->getForm();
        return $form;
    }

    /**
     * @Route("/editEmail/{id}")
     */
    public function editEmailAction($id)
    {
        return $this->render('AppBundle:Email:edit_email.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deleteEmail/{id}")
     */
    public function deleteEmailAction($id)
    {
        return $this->render('AppBundle:Email:delete_email.html.twig', array(
            // ...
        ));
    }

}
