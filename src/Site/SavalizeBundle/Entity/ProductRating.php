<?php

namespace Site\SavalizeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductRating
 *
 * @ORM\Table(name="product_rating")
 * @ORM\Entity(repositoryClass="Site\SavalizeBundle\Entity\ProductRatingRepository")
 */
class ProductRating
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
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer")
     */
    private $rating;

    /**
     * @var boolean
     *
     * @ORM\Column(name="liked", type="boolean")
     */
    private $liked;

    /**
     *@ORM\ManyToOne(targetEntity="\Site\SavalizeBundle\Entity\ProductBrand", inversedBy="productRatings")
     *@ORM\JoinColumn(name="productBrand_id", referencedColumnName="id", onDelete = "CASCADE")
     */
    private $productBrand;

    /**
     *@ORM\ManyToOne(targetEntity="\Site\SavalizeBundle\Entity\Customer", inversedBy="productRatings")
     *@ORM\JoinColumn(name="customer_id", referencedColumnName="id", onDelete = "CASCADE")
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
     * Set rating
     *
     * @param integer $rating
     * @return ProductRating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    
        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set liked
     *
     * @param boolean $liked
     * @return ProductRating
     */
    public function setLiked($liked)
    {
        $this->liked = $liked;
    
        return $this;
    }

    /**
     * Get liked
     *
     * @return boolean 
     */
    public function getLiked()
    {
        return $this->liked;
    }
}
