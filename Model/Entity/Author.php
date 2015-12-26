<?php
namespace Model\Entity;

use Doctrine\Common\Collections\ArrayCollection;

require_once '../Model/Entity/Book.php';

/** @Entity
@Table(name="author")*/
class Author
{

    /**
     * @var string
     * @Id @Column(type="integer") @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string")
     */
    private $name;

    /**
     * @var string
     * @Column(type="string")
     */
    private $firstName;

    /**
     * @var string
     * @Column(type="string", nullable=true)
     */
    private $image;

    /**
     * @var string
     * @Column(type="string")
     */
    private $description;

    /**
     * @var ArrayCollection
     * @OneToMany(targetEntity="Model\Entity\Book", mappedBy="author",cascade={"persist"})
     */
    private $books;

    /**
     * Author constructor.
     * @return Author
     */
    public function __construct()
    {
        $this->books = new \Doctrine\Common\Collections\ArrayCollection();

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Author
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Author
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
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
     * @return Author
     */
    public function setImage($image)
    {
        $this->image = $image;
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
     * @return Author
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return ArrayCollection
     */
    public function getBooks()
    {
        return $this->books;
    }

    /**
     * @param Book $book
     * @return Author $this
     */
    public function addBook(Book $book)
    {
        $this->books->add($book);
        return $this;
    }
}