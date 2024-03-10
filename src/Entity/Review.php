<?php

namespace App\Entity;
 
 use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;
 
 /** A review of a book. */
#[ORM\Entity]
 #[ApiResource]
 class Review
 {
     /** The ID of this review. */
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
     private ?int $id = null;
 
     /** The rating of this review (between 0 and 5). */
    #[ORM\Column(type: 'smallint')]
     public int $rating = 0;
 
     /** The body of the review. */
    #[ORM\Column(type: 'text')]
     public string $body = '';
 
     /** The author of the review. */
    #[ORM\Column]
     public string $author = '';
 
     /** The date of publication of this review.*/
    #[ORM\Column]
     public ?\DateTimeImmutable $publicationDate = null;
 
     /** The book this review is about. */
    #[ORM\ManyToOne(inversedBy: 'reviews')]
     public ?Book $book = null;
 
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): static
    {
        $this->rating = $rating;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): static
    {
        $this->body = $body;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): static
    {
        $this->author = $author;

        return $this;
    }

    public function getPublicationDate(): ?\DateTimeImmutable
    {
        return $this->publicationDate;
    }

    public function setPublicationDate(?\DateTimeImmutable $publicationDate): static
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }
 }