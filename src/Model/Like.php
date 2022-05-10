<?php

namespace App\Model;

class Like
{
    private Int $post_id;
    private Int $user_id;
    private Int $like;

    /**
     * @param Int $post_id
     * @param Int $user_id
     * @param Int $like
     */
    public function __construct(int $post_id, int $user_id, int $like)
    {
        $this->post_id = $post_id;
        $this->user_id = $user_id;
        $this->like = $like;
    }

    /**
     * @return int
     */
    public function getPostId(): int
    {
        return $this->post_id;
    }

    /**
     * @param int $post_id
     */
    public function setPostId(int $post_id): void
    {
        $this->post_id = $post_id;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return int
     */
    public function getLike(): int
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



}