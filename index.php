<?php
class Post {
    public int $id;
    public int $likes = 0;
    public array $comments = [];
    private string $author;

    public function increseLikes ($qtdLikes) 
    {
        $this->likes++;
    }

    public function setAuthor($author) {
        if(strlen($author) >= 3) {
            $this->author = $author;
        }
    }

    public function getAuthor() {
        return $this->author ?? "Ghost";
    }
}

$post1 = new Post( 1 );
$post1-> setAuthor("ps");
//$post1 -> author = "Gabriel";

$post2 = new Post( 2 );
$post2-> setAuthor("Pedro");
//$post2 -> author = "Pedro";

echo "POST1: #".$post1 -> getAuthor(). "  " . $post1 ->likes. "<br>";
echo "POST2: #".$post2 -> getAuthor(). "  " . $post2 ->likes. "<br>";
?>






