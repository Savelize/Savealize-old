<?php

namespace Site\SavalizeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brand
 *
 * @ORM\Table(name="brand")
 * @ORM\Entity(repositoryClass="Site\SavalizeBundle\Entity\BrandRepository")
 */
class Brand
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="confirmed", type="integer")
     */
    private $confirmed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isDeleted", type="boolean")
     */
    private $isDeleted;

     /**
     *@ORM\ManyToOne(targetEntity="\Site\SavalizeBundle\Entity\Company", inversedBy="brands")
     *@ORM\JoinColumn(name="company_id", referencedColumnName="id", onDelete = "CASCADE")
     */
<<<<<<< HEAD
    private $product;

     /**
     * @var \History
     *
     * @ORM\OneToMany(targetEntity="History" , mappedBy="history")
     */
    private $history;
    
=======
    private $company;
      
>>>>>>> d1a447030e03cf700551546fedb9f196aae9e4d6
    /**
    *@ORM\OneToMany(targetEntity="\Site\SavalizeBundle\Entity\ProductBrand", mappedBy="brand")
    **/
    private $productBrands;

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
     * @return Brand
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
     * Set confirmed
     *
     * @param integer $confirmed
     * @return Brand
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;
    
        return $this;
    }

    /**
     * Get confirmed
     *
     * @return integer 
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     * @return Brand
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    
        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return boolean 
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Set company
     *
     * @param \Site\SavalizeBundle\Entity\Company $company
     * @return Brand
     */
    public function setCompany(\Site\SavalizeBundle\Entity\Company $company = null)
    {
        $this->company = $company;
    
        return $this;
    }

    /**
     * Get company
     *
     * @return \Site\SavalizeBundle\Entity\Company 
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productBrands = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add productBrands
     *
     * @param \Site\SavalizeBundle\Entity\ProductBrand $productBrands
     * @return Brand
     */
    public function addProductBrand(\Site\SavalizeBundle\Entity\ProductBrand $productBrands)
    {
        $this->productBrands[] = $productBrands;
    
        return $this;
    }

    /**
     * Remove productBrands
     *
     * @param \Site\SavalizeBundle\Entity\ProductBrand $productBrands
     */
    public function removeProductBrand(\Site\SavalizeBundle\Entity\ProductBrand $productBrands)
    {
        $this->productBrands->removeElement($productBrands);
    }

    /**
     * Get productBrands
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductBrands()
    {
        return $this->productBrands;
    }

    /**
     * Add history
     *
     * @param \Site\SavalizeBundle\Entity\History $history
     * @return Brand
     */
    public function addHistory(\Site\SavalizeBundle\Entity\History $history)
    {
        $this->history[] = $history;
    
        return $this;
    }

    /**
     * Remove history
     *
     * @param \Site\SavalizeBundle\Entity\History $history
     */
    public function removeHistory(\Site\SavalizeBundle\Entity\History $history)
    {
        $this->history->removeElement($history);
    }

    /**
     * Get history
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHistory()
    {
        return $this->history;
    }
}