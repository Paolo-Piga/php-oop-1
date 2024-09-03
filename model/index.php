<?php
    class movie {
        public $title;
        public $actors;
        public $genre;
        public $director;

        public function __construct($title, $actors, $genre, $director) {
            $this->title = $title;
            $this->actors = $actors;
            $this->genre = $genre;
            $this->director = $director;
        }

        public function cast() {
            return "Con {$this->actors}, diretta da {$this->director},
            Il nuovissimo film {$this->$genre}: {$this->$title}.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie OOP</title>
</head>
<body>
    <h1><?php echo $movie->title ?></h1>
    <span><?php echo $movie->actors ?></span>
    <span><?php echo $movie->genre ?></span>
    <span><?php echo $movie->director ?></span>
</body>
</html>