<?php 
class Movies
{
    public $titolo;
    public $lingua;
    public $durata;

    public function __construct($titolo, $lingua, $durata)
    {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->durata = $durata;
    }
}

$listMovies=[
    new Movies('Fast & Furious', 'EN', '120 min'),
    new Movies('Fast & Furious2', 'EN', '130 min'),
    new Movies('Fast & Furious3', 'EN', '126 min'),
]
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <h1>Hello OOP World</h1>

       
        <?php foreach ($listMovies as $movie) { ?> 
            <div class="bg-danger m-2 w-25">
            <h3><?= $movie->titolo ?></h3>
            <h5><?= $movie->lingua ?></h5>
            <span><?= $movie->durata ?></span>
        </div>
        <?php } ?>

</body>

</html>