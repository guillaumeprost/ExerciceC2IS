<?php
namespace Model\Entity;

/** @Entity
@Table(name="book")*/
class Book
{
    /**
     * @var string
     * @Id @Column(type="integer") @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /** @Column(type="string") */
    private $title;

    /**
     * @var Author
     * @ManyToOne(targetEntity="Model\Entity\Author", inversedBy="books" ,cascade={"persist"})
     * @JoinColumn(name="author_id", referencedColumnName="id")
     */
    private $author;

    /**
     * @var string
     * @Column(type="string")
     */
    private $description;

    /**
     * @var string
     * @Column(type="string",nullable=true)
     */
    private $image;


    /**
     * Book constructor.
     * @return Book
     */
    public function __construct()
    {
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Book
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return Author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param Author $author
     * @return Book
     */
    public function setAuthor(Author $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Book
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return Book
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
}