<?php
class post{
    public $likes = 0;
    public $comments = [];
    public $author;

// This acessa o objeto de fora da função
    public function aumentarlike(){
        $this->likes++;
    }
}

$post1 = new post();
$post1->aumentarlike();
$post2 = new post();
$post2->likes = 10;

echo "POST 1:" .$post1->likes . "<br>";
echo "POST 2:" .$post2->likes . "<br>";