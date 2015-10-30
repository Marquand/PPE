<?php

namespace PointWeb\VeilleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PointWeb\VeilleBundle\Entity\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="h1", type="string", length=255)
     */
    private $h1;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="photo1", type="string", length=255)
     */
    private $photo1;

    /**
     * @var string
     *
     * @ORM\Column(name="photo2", type="string", length=255)
     */
    private $photo2;

    /**
     * @var string
     *
     * @ORM\Column(name="photo3", type="string", length=255)
     */
    private $photo3;

    /**
     * @var string
     *
     * @ORM\Column(name="url1", type="string", length=255)
     */
    private $url1;

    /**
     * @var string
     *
     * @ORM\Column(name="url2", type="string", length=255)
     */
    private $url2;


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
     * Set h1
     *
     * @param string $h1
     * @return Article
     */
    public function setH1($h1)
    {
        $this->h1 = $h1;
    
        return $this;
    }

    /**
     * Get h1
     *
     * @return string 
     */
    public function getH1()
    {
        return $this->h1;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Article
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    
        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Article
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set photo1
     *
     * @param string $photo1
     * @return Article
     */
    public function setPhoto1($photo1)
    {
        $this->photo1 = $photo1;
    
        return $this;
    }

    /**
     * Get photo1
     *
     * @return string 
     */
    public function getPhoto1()
    {
        return $this->photo1;
    }

    /**
     * Set photo2
     *
     * @param string $photo2
     * @return Article
     */
    public function setPhoto2($photo2)
    {
        $this->photo2 = $photo2;
    
        return $this;
    }

    /**
     * Get photo2
     *
     * @return string 
     */
    public function getPhoto2()
    {
        return $this->photo2;
    }

    /**
     * Set photo3
     *
     * @param string $photo3
     * @return Article
     */
    public function setPhoto3($photo3)
    {
        $this->photo3 = $photo3;
    
        return $this;
    }

    /**
     * Get photo3
     *
     * @return string 
     */
    public function getPhoto3()
    {
        return $this->photo3;
    }

    /**
     * Set url1
     *
     * @param string $url1
     * @return Article
     */
    public function setUrl1($url1)
    {
        $this->url1 = $url1;
    
        return $this;
    }

    /**
     * Get url1
     *
     * @return string 
     */
    public function getUrl1()
    {
        return $this->url1;
    }

    /**
     * Set url2
     *
     * @param string $url2
     * @return Article
     */
    public function setUrl2($url2)
    {
        $this->url2 = $url2;
    
        return $this;
    }

    /**
     * Get url2
     *
     * @return string 
     */
    public function getUrl2()
    {
        return $this->url2;
    }
}
