<?php
namespace EshopBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @author fikar
 * @ORM\Entity()
 * @ORM\Table(name="discount")
 */
class Discount {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;
    
    /**
     * Jméno slevy
     * @ORM\Column(type="string", length=32)
     */
    private $name;
    
    /**
     * popisek slevy
     * @ORM\Column(type="text")
     */
    private $description;
    
    /**
     * Hodnota slevy v procentech
     * @ORM\Column(type="float")
     */
    private $value;
    
    /**
     * Kód slevy
     * @ORM\Column(type="string", length=32)
     */
    private $code;
    
    /**
     * byla použita?
     * @ORM\Column(type="boolean")
     */
    private $used;
    
    /**
     * Platnost do
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $expireDate;
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function getValue() {
        return $this->value;
    }

    function getCode() {
        return $this->code;
    }

    function getUsed() {
        return $this->used;
    }

    function getExpireDate() {
        return $this->expireDate;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setValue($value) {
        $this->value = $value;
    }

    function setCode($code) {
        $this->code = $code;
    }

   
    function setUsed($used) {
        $this->used = $used;
    }

    function setExpireDate($expireDate) {
        $this->expireDate = $expireDate;
    }
}