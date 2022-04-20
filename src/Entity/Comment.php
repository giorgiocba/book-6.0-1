<?php

namespace App\Entity;

<<<<<<< Updated upstream
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
=======
use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;
>>>>>>> Stashed changes
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
#[ORM\HasLifecycleCallbacks]
<<<<<<< Updated upstream
#[ApiResource(
    collectionOperations: ['get' => ['normalization_context' => ['groups' => 'comment:list']]],
    itemOperations: ['get' => ['normalization_context' => ['groups' => 'comment:item']]],
    order: ['createdAt' => 'DESC'],
    paginationEnabled: false,
)]
#[ApiFilter(SearchFilter::class, properties: ['conference' => 'exact'])]
=======
>>>>>>> Stashed changes
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
<<<<<<< Updated upstream
    #[Groups(['comment:list', 'comment:item'])]
=======
>>>>>>> Stashed changes
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank]
<<<<<<< Updated upstream
    #[Groups(['comment:list', 'comment:item'])]
=======
>>>>>>> Stashed changes
    private $author;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank]
<<<<<<< Updated upstream
    #[Groups(['comment:list', 'comment:item'])]
=======
>>>>>>> Stashed changes
    private $text;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank]
    #[Assert\Email]
<<<<<<< Updated upstream
    #[Groups(['comment:list', 'comment:item'])]
    private $email;

    #[ORM\Column(type: 'datetime_immutable')]
    #[Groups(['comment:list', 'comment:item'])]
=======
    private $email;

    #[ORM\Column(type: 'datetime')]
>>>>>>> Stashed changes
    private $createdAt;

    #[ORM\ManyToOne(targetEntity: Conference::class, inversedBy: 'comments')]
    #[ORM\JoinColumn(nullable: false)]
<<<<<<< Updated upstream
    #[Groups(['comment:list', 'comment:item'])]
    private $conference;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Groups(['comment:list', 'comment:item'])]
    private $photoFilename;

    #[ORM\Column(type: 'string', length: 255, options: ["default" => "submitted"])]
    private $state = 'submitted';

    public function __toString(): string
    {
        return (string) $this->getEmail();
=======
    private $conference;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $photoFilename;

    public function __toString(): string
    {
       return (string) $this->getEmail();
>>>>>>> Stashed changes
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

<<<<<<< Updated upstream
    public function getCreatedAt(): ?\DateTimeImmutable
=======
    public function getCreatedAt(): ?\DateTimeInterface
>>>>>>> Stashed changes
    {
        return $this->createdAt;
    }

<<<<<<< Updated upstream
    public function setCreatedAt(\DateTimeImmutable $createdAt): self
=======
    public function setCreatedAt(\DateTimeInterface $createdAt): self
>>>>>>> Stashed changes
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    #[ORM\PrePersist]
    public function setCreatedAtValue()
    {
        $this->createdAt = new \DateTimeImmutable();
    }
<<<<<<< Updated upstream
=======
     
>>>>>>> Stashed changes

    public function getConference(): ?Conference
    {
        return $this->conference;
    }

    public function setConference(?Conference $conference): self
    {
        $this->conference = $conference;

        return $this;
    }

    public function getPhotoFilename(): ?string
    {
        return $this->photoFilename;
    }

    public function setPhotoFilename(?string $photoFilename): self
    {
        $this->photoFilename = $photoFilename;

        return $this;
    }
<<<<<<< Updated upstream

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }
=======
>>>>>>> Stashed changes
}
