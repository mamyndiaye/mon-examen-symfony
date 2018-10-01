<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="articles")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="date_de_parution", type="string", length=255)
     */
    private $dateDeParution;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_de_publication", type="string", length=255)
     */
    private $etatDePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie_article", type="string", length=255)
     */
    private $categorieArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;


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
     * Set titre
     *
     * @param string $titre
     *
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
     * Set dateDeParution
     *
     * @param string $dateDeParution
     *
     * @return Article
     */
    public function setDateDeParution($dateDeParution)
    {
        $this->dateDeParution = $dateDeParution;

        return $this;
    }

    /**
     * Get dateDeParution
     *
     * @return string
     */
    public function getDateDeParution()
    {
        return $this->dateDeParution;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Article
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set etatDePublication
     *
     * @param string $etatDePublication
     *
     * @return Article
     */
    public function setEtatDePublication($etatDePublication)
    {
        $this->etatDePublication = $etatDePublication;

        return $this;
    }

    /**
     * Get etatDePublication
     *
     * @return string
     */
    public function getEtatDePublication()
    {
        return $this->etatDePublication;
    }

    /**
     * Set categorieArticle
     *
     * @param string $categorieArticle
     *
     * @return Article
     */
    public function setCategorieArticle($categorieArticle)
    {
        $this->categorieArticle = $categorieArticle;

        return $this;
    }

    /**
     * Get categorieArticle
     *
     * @return string
     */
    public function getCategorieArticle()
    {
        return $this->categorieArticle;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Article
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}

