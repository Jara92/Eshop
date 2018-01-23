<?php
namespace EshopBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @author fikar
 * @ORM\Entity()
 * @ORM\Table(name="produkt")
 */
class Produkt {
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
    * @ORM\Column(type="string", length=128, unique=true)
    */
    private $url;
    
    /**
    * @ORM\Column(type="text")
    */
    private $description;
    
    /**
     * Nadrazena kategorie
     *
     * @ORM\OneToOne(targetEntity="EshopBundle\Entity\Category", mappedBy="category")
     * @ORM\JoinColumn(nullable=true, referencedColumnName="id")
     */
    private $parent;
    /**
    * @ORM\Column(type="boolean")
    */
    private $active;   
    
    /**
     *
     * @ORM\Column(type="float")
     */
    private $price;
    
    /**
     * Počet kusů na skladě
     * @ORM\Column(type="integer")
     */
    private $count;
    
    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function setName($name) {
        $this->name = $name;
    }
    function getProducts() {
        return $this->products;
    }
    function getParent() {
        return $this->parent;
    }
    function getPrice() {
        return $this->price;
    }
    function getCount() {
        return $this->count;
    }
    function setUrl($url) {
        $this->url = $url;
    }
    function setProducts($products) {
        $this->products = $products;
    }
    function setParent($parent) {
        $this->parent = $parent;
    }
    function setPrice($price) {
        $this->price = $price;
    }
    function setCount($count) {
        $this->count = $count;
    }
    function getUrl() {
        return $this->url;
    }
    function getDescription() {
        return $this->description;
    }

    function getActive() {
        return $this->active;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setActive($active) {
        $this->active = $active;
    }


}