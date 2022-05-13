<?php

namespace App\Model;

class Post
{
    protected string $title;
    protected string $picture;
    protected string $description;
    private DateTime $dateAdded;
    private DateTime $dateUploaded;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getPicture(): string
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     */
    public function setPicture(string $picture): void
    {
        $this->picture = $picture;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    /**
     * @return DateTime
     */
    public function getDateAdded(): DateTime
    {
        return $this->dateAdded;
    }

    /**
     * @param DateTime $dateAdded
     */
    public function setDateAdded(DateTime $dateAdded): void
    {
        $this->dateAdded = $dateAdded;
    }

    /**
     * @return DateTime
     */
    public function getDateUploaded(): DateTime
    {
        return $this->dateUploaded;
    }

    /**
     * @param DateTime $dateUploaded
     */
    public function setDateUploaded(DateTime $dateUploaded): void
    {
        $this->dateUploaded = $dateUploaded;
    }
}