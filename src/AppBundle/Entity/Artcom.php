<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\ArticleRepository")
 */
class Artcom
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
    private $nom;


      /**
     * @var int
     *
     * @ORM\Column(name="id_article", type="integer")
     */
    private $id_article;

     /**
     * @var int
     *
     * @ORM\Column(name="id_categorie", type="integer")
     */
    private $id_categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie_article", type="string", length=255)
     */
    private $categorieArticle;

    

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
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set id_article
     *
     * @param string $id_article
     *
     * @return Article
     */
    public function setid_article($id_article)
    {
        $this->id_article = $id_article;

        return $this;
    }

    /**
     * Get id_article
     *
     * @return string
     */
    public function getid_article()
    {
        return $this->id_article;
    }

    /**
     * Set auteur
     *
     * @param string $id_categorie
     *
     * @return id_categorie
     */
    public function setid_categorie($id_categorie)
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }

    /**
     * Get id_categorie
     *
     * @return string
     */
    public function id_categorie()
    {
        return $this->id_categorie;
    }
}
?>