<?php
namespace EshopBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @author fikar
 * @ORM\Entity()
 * @ORM\Table(name="category")
 */
class Category {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=128, unique=true)
     */
    private $name;
    
    /**
     *
     * @ORM\Column(type="text")
     */
    private $description;
    
    /**
     *
     * @ORM\Column(type="string", length=128, unique=true)
     */
    private $url;
    
        /**
     * @ORM\OneToMany(targetEntity="EshopBundle\Entity\Produkt", mappedBy="category")
     */
    private $products;
    
        /**
     * Nadrazena kategorie
     *
     * @ORM\OneToOne(targetEntity="EshopBundle\Entity\Category", mappedBy="category")
     * @ORM\JoinColumn(nullable=true, referencedColumnName="id")
     */
    private $parent;
    
    function getId() {
        return $this->id;
    }
    function getName() {
        return $this->name;
    }
    function getDescription() {
        return $this->description;
    }
    function getUrl() {
        return $this->url;
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
    function setUrl($url) {
        $this->url = $url;
    }
    function getProducts() {
        return $this->products;
    }

    function getParent() {
        return $this->parent;
    }

    function setProducts($products) {
        $this->products = $products;
    }

    function setParent($parent) {
        $this->parent = $parent;
    }


}