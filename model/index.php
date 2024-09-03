<?php
class Movie {
    public $title
    public $actors
    public $genre
    public $director

    public function __construct($title, $actors, $genre, $director) {
        $this->title = $title;
        $this->actors = $actors;
        $this->genre = $genre;
        $this->director = $director;
    }

    public function cast() {
        return "Con {$this->Movie->actors}, diretta da {$this->Movie->director},
        Il nuovissimo film {$this->Movie->$genre}: {$this->Movie->$title}.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie OOP</title>
</head>
<body>
    <?php
    <h1></h1>
    ?>
</body>
</html>