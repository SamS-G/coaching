<?php

namespace App\Entity;

use App\Repository\ScheduleRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ScheduleRepository::class)
 */
class Schedule
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $start_from;

    /**
     * @ORM\Column(type="datetime")
     */
    private $end_to;

    /**
     * @ORM\ManyToOne(targetEntity=Coach::class, inversedBy="schedules")
     * @ORM\JoinColumn(nullable=false)
     */
    private $coach_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartFrom(): ?DateTimeInterface
    {
        return $this->start_from;
    }

    public function setStartFrom(DateTimeInterface $start_from): self
    {
        $this->start_from = $start_from;

        return $this;
    }

    public function getEndTo(): ?DateTimeInterface
    {
        return $this->end_to;
    }

    public function setEndTo(DateTimeInterface $end_to): self
    {
        $this->end_to = $end_to;

        return $this;
    }

    public function getCoachId(): ?Coach
    {
        return $this->coach_id;
    }

    public function setCoachId(?Coach $coach_id): self
    {
        $this->coach_id = $coach_id;

        return $this;
    }
}
