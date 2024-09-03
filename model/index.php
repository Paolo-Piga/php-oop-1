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

    $titanic = new movie ('Titanic', 'Leonardo di Caprio, Kate Winslet', 'Romantico' , 'James Cameron');

    $movie = [$titanic];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie OOP</title>
</head>
    
<body>
    <?php foreach ($movie as $film): ?>
    <h1><?php echo $film->title ?></h1>
    <span>Cast: <?php echo $film->actors ?></span> 
    <br>
    <span>Genere: <?php echo $film->genre ?></span>
    <br>
    <span>Regista: <?php echo $film->director ?></span>
    <?php endforeach ?>
</body>
</html>