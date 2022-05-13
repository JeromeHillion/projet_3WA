<?php

namespace App\Model;

class Like
{
    private Int $postId;
    private Int $userId;
    private bool $like;
    private DateTime $dateAdded;
    private DateTime $dateUploaded;

    /**
     * @param Int $postId
     * @param Int $userId
     * @param bool $like
     */
    public function __construct(int $postId, int $userId, bool $like)
    {
        $this->postId = $postId;
        $this->userId = $userId;
        $this->like = $like;
    }

    /**
     * @return int
     */
    public function getPostId(): int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     */
    public function setPostId(int $postId): void
    {
        $this->postId = $postId;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return bool
     */
    public function getLike(): bool
    {
        return $this->like;
    }

    /**
     * @param int $like
     */
    public function setLike(int $like): void
    {
        $this->like = $like;
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