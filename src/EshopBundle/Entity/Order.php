<?php
namespace EshopBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @author fikar
 * @ORM\Entity()
 * @ORM\Table(name="order")
 */
class Order {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;
    
    /**
     *
     * @ORM\Column(type="datetime")
     */
    private $date;
    
    /**
     *
     * @ORM\Column(type="float")
     */
    private $price;
    
    /**
     *
     * @ORM\Column(type="text")
     */
    private $note;
    
        /**
     * @ORM\Column(type="string", length=128)
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $surname;
    
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $email;
    
     /**
     * @ORM\Column(type="string", length=128)
     */
    private $adress;
    
    /**
     * @ORM\Column(type="string", length=16)
     */
    private $phone;
    
    /**
     *
     * @ORM\Column(type="string", length=32)
     */
    private $status;
     
    /**
     * @ORM\OneToOne(targetEntity="EshopBundle\Entity\Discount", mappedBy="discount")
     * @ORM\JoinColumn(nullable=true, referencedColumnName="id")
     */
    private $discount;
    
    
    function getId() {
        return $this->id;
    }

    function getDate() {
        return $this->date;
    }

    function getPrice() {
        return $this->price;
    }

    function getNote() {
        return $this->note;
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function getEmail() {
        return $this->email;
    }

    function getAdress() {
        return $this->adress;
    }

    function getPhone() {
        return $this->phone;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setNote($note) {
        $this->note = $note;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSurname($surname) {
        $this->surname = $surname;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setAdress($adress) {
        $this->adress = $adress;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setStatus($status) {
        $this->status = $status;
    }
    function getDiscount() {
        return $this->discount;
    }

    function setDiscount($discount) {
        $this->discount = $discount;
    }


}