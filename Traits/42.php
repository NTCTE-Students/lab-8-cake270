<?php

// Трейт Timestampable
trait Timestampable {
    protected $createdAt;
    protected $updatedAt;

    public function setCreatedAt($date) {
        $this->createdAt = $date;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function setUpdatedAt($date) {
        $this->updatedAt = $date;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}

// Класс Post
class Post {
    use Timestampable;

    public function __construct() {
        $this->setCreatedAt(date('Y-m-d H:i:s'));
        $this->setUpdatedAt(date('Y-m-d H:i:s'));
    }

    public function update() {
        $this->setUpdatedAt(date('Y-m-d H:i:s'));
    }
}

// Класс Comment
class Comment {
    use Timestampable;

    public function __construct() {
        $this->setCreatedAt(date('Y-m-d H:i:s'));
        $this->setUpdatedAt(date('Y-m-d H:i:s'));
    }

    public function update() {
        $this->setUpdatedAt(date('Y-m-d H:i:s'));
    }
}

// Пример использования
$post = new Post();
echo "Post created at: " . $post->getCreatedAt() . "<br>";
$post->update();
echo "Post updated at: " . $post->getUpdatedAt() . "<br>";

$comment = new Comment();
echo "Comment created at: " . $comment->getCreatedAt() . "<br>";
$comment->update();
echo "Comment updated at: " . $comment->getUpdatedAt() . "<br>";

?>
