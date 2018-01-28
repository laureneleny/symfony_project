<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 * @ORM\Table(name="product")
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=75)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $description;

    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime")
     */

    private $created_at;
    /**
     * @return int
     */

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Product
     */
    public function setName(string $name): Product
    {
        $this->name = $name;

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
     */
    public function setDescription($description): Product
    {
       $this->description = $description;

       return $this;
    }


    public function __construct()
    {
        date_default_timezone_set('Europe/Paris');
        $this->created_at = new DateTime('NOW');
    }

    /**
     * @return DateTime
     */
    public function getCreated_At()
    {
        return $this->created_at;
    }


    /**
     * @param DateTime $created_at
     */

    public function setCreatedAt(DateTime $created_at): void
    {
        $this->created_at = $created_at;
    }


}
