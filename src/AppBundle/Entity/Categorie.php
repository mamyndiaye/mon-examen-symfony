<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cat�gorie
 *
 * @ORM\Table(name="cat�gorie")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\Cat�gorieRepository")
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libel�", type="string", length=255)
     */
    private $libele;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelé
     *
     * @param string $libelé
     *
     * @return Catégorie
     */
    public function setLibelé($libelé)
    {
        $this->setLibelé = $libelé;

        return $this;
    }

    /**
     * Get libelé
     *
     * @return string
     */
    public function getLibelé()
    {
        return $this->libelé;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Catégorie
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
}

