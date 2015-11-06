<?php

namespace PointWeb\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frais
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PointWeb\FicheBundle\Entity\FraisRepository")
 */
class Frais
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
     * @ORM\Column(name="qt_nuit", type="integer")
     */
    private $qtNuit;

    /**
     * @var integer
     *
     * @ORM\Column(name="qt_repas", type="integer")
     */
    private $qtRepas;

    /**
     * @var integer
     *
     * @ORM\Column(name="qt_km", type="integer")
     */
    private $qtKm;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_nuit", type="float")
     */
    private $prixNuit;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_repas", type="float")
     */
    private $prixRepas;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_km", type="float")
     */
    private $prixKm;

    /**
     * @var float
     *
     * @ORM\Column(name="total_nuit", type="float")
     */
    private $totalNuit;

    /**
     * @var float
     *
     * @ORM\Column(name="total_repas", type="float")
     */
    private $totalRepas;

    /**
     * @var float
     *
     * @ORM\Column(name="total_km", type="float")
     */
    private $totalKm;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    private $total;


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
     * Set qtNuit
     *
     * @param integer $qtNuit
     * @return Frais
     */
    public function setQtNuit($qtNuit)
    {
        $this->qtNuit = $qtNuit;
    
        return $this;
    }

    /**
     * Get qtNuit
     *
     * @return integer 
     */
    public function getQtNuit()
    {
        return $this->qtNuit;
    }

    /**
     * Set qtRepas
     *
     * @param integer $qtRepas
     * @return Frais
     */
    public function setQtRepas($qtRepas)
    {
        $this->qtRepas = $qtRepas;
    
        return $this;
    }

    /**
     * Get qtRepas
     *
     * @return integer 
     */
    public function getQtRepas()
    {
        return $this->qtRepas;
    }

    /**
     * Set qtKm
     *
     * @param integer $qtKm
     * @return Frais
     */
    public function setQtKm($qtKm)
    {
        $this->qtKm = $qtKm;
    
        return $this;
    }

    /**
     * Get qtKm
     *
     * @return integer 
     */
    public function getQtKm()
    {
        return $this->qtKm;
    }

    /**
     * Set prixNuit
     *
     * @param float $prixNuit
     * @return Frais
     */
    public function setPrixNuit($prixNuit)
    {
        $this->prixNuit = $prixNuit;
    
        return $this;
    }

    /**
     * Get prixNuit
     *
     * @return float 
     */
    public function getPrixNuit()
    {
        return $this->prixNuit;
    }

    /**
     * Set prixRepas
     *
     * @param float $prixRepas
     * @return Frais
     */
    public function setPrixRepas($prixRepas)
    {
        $this->prixRepas = $prixRepas;
    
        return $this;
    }

    /**
     * Get prixRepas
     *
     * @return float 
     */
    public function getPrixRepas()
    {
        return $this->prixRepas;
    }

    /**
     * Set prixKm
     *
     * @param float $prixKm
     * @return Frais
     */
    public function setPrixKm($prixKm)
    {
        $this->prixKm = $prixKm;
    
        return $this;
    }

    /**
     * Get prixKm
     *
     * @return float 
     */
    public function getPrixKm()
    {
        return $this->prixKm;
    }

    /**
     * Set totalNuit
     *
     * @param float $totalNuit
     * @return Frais
     */
    public function setTotalNuit($totalNuit)
    {
        $this->totalNuit = $totalNuit;
    
        return $this;
    }

    /**
     * Get totalNuit
     *
     * @return float 
     */
    public function getTotalNuit()
    {
        return $this->totalNuit;
    }

    /**
     * Set totalRepas
     *
     * @param float $totalRepas
     * @return Frais
     */
    public function setTotalRepas($totalRepas)
    {
        $this->totalRepas = $totalRepas;
    
        return $this;
    }

    /**
     * Get totalRepas
     *
     * @return float 
     */
    public function getTotalRepas()
    {
        return $this->totalRepas;
    }

    /**
     * Set totalKm
     *
     * @param float $totalKm
     * @return Frais
     */
    public function setTotalKm($totalKm)
    {
        $this->totalKm = $totalKm;
    
        return $this;
    }

    /**
     * Get totalKm
     *
     * @return float 
     */
    public function getTotalKm()
    {
        return $this->totalKm;
    }

    /**
     * Set total
     *
     * @param float $total
     * @return Frais
     */
    public function setTotal($total)
    {
        $this->total = $total;
    
        return $this;
    }

    /**
     * Get total
     *
     * @return float 
     */
    public function getTotal()
    {
        return $this->total;
    }
}
