<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\FormBuilder;
use AppBundle\Entity\Person;
use AppBundle\Entity\Addres;
use AppBundle\Entity\Email;
use AppBundle\Entity\Phone;

class PersonController extends Controller {

    /**
     * @Route("/newPerson",name="newPerson")
     */
    public function newPersonAction(Request $request) {
        $person = new Person();
        $url = $this->generateUrl('newPerson');
        $form = $this->createPersonAction($person, $url);



        $form->handleRequest($request);



        if ($form->isSubmitted()) {

            $newPerson = $form->getData();
            $validator = $this->get('validator');
            $errors = $validator->validate($newPerson);
            if (count($errors) > 0) {
                return new Response('Jest bład');
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($newPerson);
            $em->flush();

            return new \Symfony\Component\HttpFoundation\RedirectResponse('/newAddres');
        }



        return $this->render('AppBundle:Person:new_person.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    

    private function createPersonAction(Person $person, $url) {



        $form = $this->createFormBuilder($person)
                ->add('name', 'text')
                ->add('surname', 'text', array(
                    'required' => true,
                    'label' => 'Podaj nazwisko'
                ))
                ->add('save', 'submit', array('label' => 'Zapisz użytkownika'))
                ->getForm();

        return $form;
    }

    /**
     * @Route("edit/{id}",name="edit")
     */
    public function modifyAction(Request $req, $id) {
        $em = $this->getDoctrine()->getRepository('AppBundle:Person');
        $person = $em->find($id);
        $url = $this->generateUrl('edit', array('id' => $id));
        $form = $this->createPersonAction($person, $url);

        $form->handleRequest($req);

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();

            $em->flush();

            return $this->redirect($this->generateUrl('showAll'));
        }




        return $this->render('AppBundle:Person:modify.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/delete/{id}",name="deletePerson")
     */
    public function deleteAction($id) {


        $person = $this->getDoctrine()->getRepository("AppBundle:Person")->findOneById($id);

        if (!$person) {
            throw new Exception('Tu jest błąd');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($person);
        $em->flush();


        return $this->redirect($this->generateUrl('showAll'));
    }

    /**
     * @Route("/showAll",name="showAll")
     */
    public function showAllAction() {
        $em = $this->getDoctrine()->getRepository("AppBundle:Person");
        $persons = $em->findAll();
        if (!$persons) {
            throw new \Symfony\Component\Translation\Exception\NotFoundResourceException('Wystąpił błąd w metodzie showAllActions');
        }


        return $this->render('AppBundle:Person:show_all.html.twig', array(
                    'persons' => $persons
        ));
    }

    /**
     * @Route("/show/{id}")
     */
    public function showPersonAction($id) {
        $em = $this->getDoctrine()->getRepository("AppBundle:Person");
        $person = $em->find($id);
        $addres = $person->getAddres();

        if (!$person) {
            throw new \Symfony\Component\Translation\Exception\NotFoundResourceException('Nie ma takiego kontaktu');
        }


        return $this->render('AppBundle:Person:show_person.html.twig', array(
                    'person' => $person,
                    'addres' => $addres
        ));
    }

}
