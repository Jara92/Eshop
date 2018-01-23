<?php
namespace EshopBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @author fikar
 * @ORM\Entity()
 * @ORM\Table(name="user")
 */
class User {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $surname;
    
    /**
     * @ORM\Column(type="string", length=128, unique=true)
     */
    private $email;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;
    
    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $role;
    
    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $adress;
    
    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $phone;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSurname($surname) {
        $this->surname = $surname;
    }
    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getRole() {
        return $this->role;
    }

    function getAdress() {
        return $this->adress;
    }

    function getPhone() {
        return $this->phone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRole($role) {
        $this->role = $role;
    }

    function setAdress($adress) {
        $this->adress = $adress;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }


}