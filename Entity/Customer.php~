<?php

namespace KeiruaProd\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* KeiruaProd\ApplicationBundle\Entity\Customer
*
* @ORM\Table()
* @ORM\Entity
*/
class Customer
{
    /**
	* @var integer $id
	*
	* @ORM\Column(name="id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
    protected $id;

    /**
	* @var string $name
	*
	* @ORM\Column(name="name", type="string", length=255)
	*/
    protected $name;
    
    /**
	* @ORM\OneToMany(targetEntity="Product", mappedBy="customer", cascade={"persist"})
	* @var type
	*/
    protected $products;
	
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Add products
     *
     * @param KeiruaProd\ApplicationBundle\Entity\Product $products
     */
    public function addProduct(\KeiruaProd\ApplicationBundle\Entity\Product $products)
    {
        $this->products[] = $products;
    }

    /**
     * Get products
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }
	
	
    public function setProducts(\Doctrine\Common\Collections\ArrayCollection $products){
        $this->products = $products;
        foreach ($products as $prod){
            $prod->setCustomer($this);
        }
    }
}