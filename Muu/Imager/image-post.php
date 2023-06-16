<?php

declare(strict_types = 1);

class Post {

    private string $title;
    private string $author;
    private int $likes;
    private string $comments;

    // Title setter and getter

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

}



