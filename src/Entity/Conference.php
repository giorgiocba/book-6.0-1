<?php

namespace App\Entity;

<<<<<<< Updated upstream
use ApiPlatform\Core\Annotation\ApiResource;
=======
>>>>>>> Stashed changes
use App\Repository\ConferenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
<<<<<<< Updated upstream
use Symfony\Component\Serializer\Annotation\Groups;
=======
>>>>>>> Stashed changes
use Symfony\Component\String\Slugger\SluggerInterface;

#[ORM\Entity(repositoryClass: ConferenceRepository::class)]
#[UniqueEntity('slug')]
<<<<<<< Updated upstream
#[ApiResource(
    collectionOperations: ['get' => ['normalization_context' => ['groups' => 'conference:list']]],
    itemOperations: ['get' => ['normalization_context' => ['groups' => 'conference:item']]],
    order: ['year' => 'DESC', 'city' => 'ASC'],
    paginationEnabled: false,
)]
=======
>>>>>>> Stashed changes
class Conference
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
<<<<<<< Updated upstream
    #[Groups(['conference:list', 'conference:item'])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['conference:list', 'conference:item'])]
    private $city;

    #[ORM\Column(type: 'string', length: 4)]
    #[Groups(['conference:list', 'conference:item'])]
    private $year;

    #[ORM\Column(type: 'boolean')]
    #[Groups(['conference:list', 'conference:item'])]
=======
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $city;

    #[ORM\Column(type: 'string', length: 4)]
    private $year;

    #[ORM\Column(type: 'boolean')]
>>>>>>> Stashed changes
    private $isInternational;

    #[ORM\OneToMany(mappedBy: 'conference', targetEntity: Comment::class, orphanRemoval: true)]
    private $comments;

<<<<<<< Updated upstream
    #[ORM\Column(type: 'string', length: 255, unique: true)]
    #[Groups(['conference:list', 'conference:item'])]
=======
    #[ORM\Column(type: 'string', length: 255, nullable: false, unique: true)]
>>>>>>> Stashed changes
    private $slug;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }

    public function __toString(): string
<<<<<<< Updated upstream
    {
        return $this->city.' '.$this->year;
    }

=======
        {
            return $this->city.' '.$this->year;
        }
    
>>>>>>> Stashed changes
    public function getId(): ?int
    {
        return $this->id;
    }

    public function computeSlug(SluggerInterface $slugger)
    {
        if (!$this->slug || '-' === $this->slug) {
            $this->slug = (string) $slugger->slug((string) $this)->lower();
        }
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(string $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getIsInternational(): ?bool
    {
        return $this->isInternational;
    }

    public function setIsInternational(bool $isInternational): self
    {
        $this->isInternational = $isInternational;

        return $this;
    }

    /**
<<<<<<< Updated upstream
     * @return Collection|Comment[]
=======
     * @return Collection<int, Comment>
>>>>>>> Stashed changes
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setConference($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getConference() === $this) {
                $comment->setConference(null);
            }
        }

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

<<<<<<< Updated upstream
    public function setSlug(string $slug): self
=======
    public function setSlug(?string $slug): self
>>>>>>> Stashed changes
    {
        $this->slug = $slug;

        return $this;
    }
}
