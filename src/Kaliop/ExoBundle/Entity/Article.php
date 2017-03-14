<?php

namespace Kaliop\ExoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="Kaliop\ExoBundle\Repository\ArticleRepository")
 * @ORM\HasLifecycleCallbacks()
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;



    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;



    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=60)
     */
    private $author;



    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;



    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean")
     */
    private $published = false;



    /**
     * @var
     *
     * @ORM\OneToOne(targetEntity="Kaliop\ExoBundle\Entity\Image", cascade={"persist", "remove"})
     */
    private $image;



    /**
     * @var
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=true)
     */
    private $updateDate;



    /**
     * @var
     *
     * @ORM\Column(name="nb_articles", type="integer")
     */
    private $nbArticles = 0;



    public function __construct()
    {
        $this->date = new \Datetime();
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
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }



    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }



    /**
     * Set title
     *
     * @param string $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }



    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }



    /**
     * Set author
     *
     * @param string $author
     * @return Article
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }



    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }



    /**
     * Set content
     *
     * @param string $content
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }



    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }



    /**
     * Set the current state or publishment (bool)
     *
     * @param mixed $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }



    /**
     * Return true if the article is published
     *
     * @return mixed
     */
    public function getPublished()
    {
        return $this->published;
    }



    /**
     * @param mixed $image
     */
    public function setImage(Image $image = null)
    {
        $this->image = $image;
    }



    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }



    /**
     * @param mixed $updateDate
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
    }



    /**
     * @return mixed
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }



    /**
     * @param mixed $nbArticles
     */
    public function setNbArticles($nbArticles)
    {
        $this->nbArticles = $nbArticles;
    }



    /**
     * @return mixed
     */
    public function getNbArticles()
    {
        return $this->nbArticles;
    }



    // ------------------------------------------------- CYCLELIFE -----------------------------------------------------

    /**
     * @ORM\PreUpdate
     */
    public function updateDate() /* Lors de la modification d'un article, met à jour la date */
    {
        $this->setUpdateDate(new \Datetime());
    }



    /**
     * @ORM\PrePersist
     */
    public function increaseArticles() /* Lors de la création d'un article, incrémente $nbArticles */
    {
        $this->nbArticles++;
    }



    /**
     * @ORM\PreRemove
     */
    public function decreaseArticles() /* Lors de la supression d'un article, décrémente $nbArticles */
    {
        $this->nbArticles--;
    }
}
