<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonRepository")
 */
class Person
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Phone",mappedBy="person")
     */
    private $phone;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Addres", mappedBy="person",cascade={"remove"})
     */
    private $addres;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Email", mappedBy="person")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;


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
     * Set name
     *
     * @param string $name
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Person
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Person
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->addres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add addres
     *
     * @param \AppBundle\Entity\Addres $addres
     * @return Person
     */
    public function addAddre(\AppBundle\Entity\Addres $addres)
    {
        $this->addres[] = $addres;

        return $this;
    }
    
    

    /**
     * Remove addres
     *
     * @param \AppBundle\Entity\Addres $addres
     */
    public function removeAddre(\AppBundle\Entity\Addres $addres)
    {
        $this->addres->removeElement($addres);
    }

    /**
     * Get addres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddres()
    {
        return $this->addres;
    }

    /**
     * Add phone
     *
     * @param \AppBundle\Entity\Phone $phone
     * @return Person
     */
    public function addPhone(\AppBundle\Entity\Phone $phone)
    {
        $this->phone[] = $phone;

        return $this;
    }

    /**
     * Remove phone
     *
     * @param \AppBundle\Entity\Phone $phone
     */
    public function removePhone(\AppBundle\Entity\Phone $phone)
    {
        $this->phone->removeElement($phone);
    }

    /**
     * Get phone
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Add email
     *
     * @param \AppBundle\Entity\Email $email
     * @return Person
     */
    public function addEmail(\AppBundle\Entity\Email $email)
    {
        $this->email[] = $email;

        return $this;
    }

    /**
     * Remove email
     *
     * @param \AppBundle\Entity\Email $email
     */
    public function removeEmail(\AppBundle\Entity\Email $email)
    {
        $this->email->removeElement($email);
    }

    /**
     * Get email
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    public function __toString() {
        return $this->name. ' '.$this->surname;
    }
}
