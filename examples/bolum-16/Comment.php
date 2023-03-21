<?php

class Comment {
    public $username;
    public $text;
    public $likes;
    public $dislikes;

    function __construct(string $username, string $text, int $likes = 0, int $dislikes = 0) {
        $this -> username = $username;
        $this -> text = $text;
        $this -> likes = $likes;
        $this -> dislikes = $dislikes;
    }

    function display_comment() {
        return "{$this->username} diyor ki; {$this->text} <br> beğeni: {$this->likes} beğenmeme: {$this->dislikes} <br><hr>";
    }
}
?>