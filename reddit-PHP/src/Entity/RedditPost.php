<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RedditPostRepository")
 */
class RedditPost
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
  
    public static $ID_GENERATOR = 1;

    function __construct($inputTitle, $inputURL)
    {
        $this->id = RedditPost::$ID_GENERATOR++;
        $this->title = $inputTitle;
        $this->URL = $inputURL;
        $this->vote_count = 0;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="text", length=255)
     */
    private $title;

    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @ORM\Column(type="text", length=255)
     */
    private $URL;

    public function getURL(): ?string
    {
        return $this->URL;
    }

    /**
     * @ORM\Column(type="integer")
     */
    private $vote_count;

    public function getVote_count(): ?int
    {
        return $this->vote_count;
    }

    public function setVote_count($inputVote): self
    {
        $this->vote_count = $inputVote;
        return $this;
    }
};
