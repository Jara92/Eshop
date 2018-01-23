<?php
namespace EshopBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @author fikar
 * @ORM\Entity()
 * @ORM\Table(name="products_in_order")
 */
class ProductsInOrder {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;
    
    /**
     *
     * @ORM\OneToOne(targetEntity="EshopBundle\Entity\Produkt", mappedBy="produkt")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="id")
     */
    private $product;
    
    /**
     *
     * @ORM\OneToOne(targetEntity="EshopBundle\Entity\Order", mappedBy="order")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="id")
     */
    private $order;
    
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $count;
    
    function getId() {
        return $this->id;
    }

    function getProduct() {
        return $this->product;
    }

    function getOrder() {
        return $this->order;
    }

    function getCount() {
        return $this->count;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setProduct($product) {
        $this->product = $product;
    }

    function setOrder($order) {
        $this->order = $order;
    }

    function setCount($count) {
        $this->count = $count;
    }


}