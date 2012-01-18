<?php

namespace KeiruaProd\ApplicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* KeiruaProd\ApplicationBundle\Entity\Product
*
* @ORM\Table()
* @ORM\Entity
*/
class Product
{
    /**
	* @var integer $id
	*
	* @ORM\Column(name="id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
    private $id;

    /**
	* @var string $name
	*
	* @ORM\Column(name="name", type="string", length=255)
	*/
    private $name;
    
    /**
	* @ORM\ManyToOne(targetEntity="Customer", inversedBy="products")
	* @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
	* @var type
	*/
    private $customer;
	
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
     * Set customer
     *
     * @param KeiruaProd\ApplicationBundle\Entity\Customer $customer
     */
    public function setCustomer(\KeiruaProd\ApplicationBundle\Entity\Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Get customer
     *
     * @return KeiruaProd\ApplicationBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}