<?php

class Material {
    protected $title;
    protected $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getInfo() {
        return "Title: {$this->title}, Author: {$this->author}";
    }
}

class Book extends Material {
    private $pages;

    public function __construct($title, $author, $pages) {
        parent::__construct($title, $author);
        $this->pages = $pages;
    }

    public function getInfo() {
        return parent::getInfo() . ", Pages: {$this->pages}";
    }
}

class Article extends Material {
    private $journal;

    public function __construct($title, $author, $journal) {
        parent::__construct($title, $author);
        $this->journal = $journal;
    }

    public function getInfo() {
        return parent::getInfo() . ", Journal: {$this->journal}";
    }
}

class Video extends Material {
    private $duration; // Время в минутах

    public function __construct($title, $author, $duration) {
        parent::__construct($title, $author);
        $this->duration = $duration;
    }

    public function getInfo() {
        return parent::getInfo() . ", Duration: {$this->duration} minutes";
    }
}

// Создание объектов
$book = new Book("PHP for Beginners", "John Doe", 300);
$article = new Article("Understanding OOP in PHP", "Jane Smith", "PHP Journal");
$video = new Video("Learn PHP in 30 Minutes", "Alice Johnson", 30);

// Тестирование объектов
echo $book->getInfo() . PHP_EOL; // Вывод: Title: PHP for Beginners, Author: John Doe, Pages: 300
echo $article->getInfo() . PHP_EOL; // Вывод: Title: Understanding OOP in PHP, Author: Jane Smith, Journal: PHP Journal
echo $video->getInfo() . PHP_EOL; // Вывод: Title: Learn PHP in 30 Minutes, Author: Alice Johnson, Duration: 30 minutes

?>


▎