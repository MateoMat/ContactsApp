<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Addres
 *
 * @ORM\Table(name="addres")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AddresRepository")
 */
class Addres
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     * 
     */
    private $city;
    
    /**
     * @ORM\ManyToOne(targetEntity="Person",inversedBy="addres")
     * @ORM\JoinColumn(name="person_id",referencedColumnName="id")
     */
    private $person;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="number1", type="string", length=255)
     */
    private $number1;

    /**
     * @var string
     *
     * @ORM\Column(name="number2", type="string", length=255,nullable=true)
     */
    private $number2;


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
     * Set city
     *
     * @param string $city
     * @return Addres
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Addres
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set number1
     *
     * @param string $number1
     * @return Addres
     */
    public function setNumber1($number1)
    {
        $this->number1 = $number1;

        return $this;
    }

    /**
     * Get number1
     *
     * @return string 
     */
    public function getNumber1()
    {
        return $this->number1;
    }

    /**
     * Set number2
     *
     * @param string $number2
     * @return Addres
     */
    public function setNumber2($number2)
    {
        $this->number2 = $number2;

        return $this;
    }

    /**
     * Get number2
     *
     * @return string 
     */
    public function getNumber2()
    {
        return $this->number2;
    }

    /**
     * Set person
     *
     * @param \AppBundle\Entity\Person $person
     * @return Addres
     */
    public function setPerson(\AppBundle\Entity\Person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \AppBundle\Entity\Person 
     */
    public function getPerson()
    {
        return $this->person;
    }
    
    public function __toString() {
        return $this->city. ' '.$this->street;
    }
    
}
