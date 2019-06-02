<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $authorId;

    /**
     * @ORM\Column(type="string", length=2000)
     */
    private $Content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $addDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $editTime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    public function setAuthorId(int $authorId): self
    {
        $this->authorId = $authorId;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(string $Content): self
    {
        $this->Content = $Content;

        return $this;
    }

    public function getAddDate(): ?\DateTimeInterface
    {
        return $this->addDate;
    }

    public function setAddDate(\DateTimeInterface $addDate): self
    {
        $this->addDate = $addDate;

        return $this;
    }

    public function getEditTime(): ?\DateTimeInterface
    {
        return $this->editTime;
    }

    public function setEditTime(?\DateTimeInterface $editTime): self
    {
        $this->editTime = $editTime;

        return $this;
    }
}
