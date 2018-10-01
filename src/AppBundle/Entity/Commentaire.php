<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\CommentaireRepository")
 */
class Commentaire
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
     * @ORM\Column(name="id_art", type="string", length=255)
     */
    private $idArt;

    /**
     * @var string
     *
     * @ORM\Column(name="id_util", type="string", length=255)
     */
    private $idUtil;

    /**
     * @var string
     *
     * @ORM\Column(name="contenue", type="string", length=255)
     */
    private $contenue;


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
     * Set idArt
     *
     * @param string $idArt
     *
     * @return Commentaire
     */
    public function setIdArt($idArt)
    {
        $this->idArt = $idArt;

        return $this;
    }

    /**
     * Get idArt
     *
     * @return string
     */
    public function getIdArt()
    {
        return $this->idArt;
    }

    /**
     * Set idUtil
     *
     * @param string $idUtil
     *
     * @return Commentaire
     */
    public function setIdUtil($idUtil)
    {
        $this->idUtil = $idUtil;

        return $this;
    }

    /**
     * Get idUtil
     *
     * @return string
     */
    public function getIdUtil()
    {
        return $this->idUtil;
    }

    /**
     * Set contenue
     *
     * @param string $contenue
     *
     * @return Commentaire
     */
    public function setContenue($contenue)
    {
        $this->contenue = $contenue;

        return $this;
    }

    /**
     * Get contenue
     *
     * @return string
     */
    public function getContenue()
    {
        return $this->contenue;
    }
}

