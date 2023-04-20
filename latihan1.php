<?php

$ListFilm = [
    [
        "Judul" => "Pulp Fiction",
        "TahunRilis" => "1994",
        "Sutradara" => "Quentin Tarantino",
        "PemeranUtama" => "John Travolta",
        "gambar" => "PulpFiction.jpg"
    ],
    [
        "Judul" => "The Godfather",
        "TahunRilis" => "1972",
        "Sutradara" => "Francis Ford Cappola",
        "PemeranUtama" => "Al pacino",
        "gambar" => "TheGodfather.jpg"
    ],
    [
        "Judul" => "Avengers : Endgame",
        "TahunRilis" => "2019",
        "Sutradara" => "Russo Brothers",
        "PemeranUtama" => "Robert Downer Jr.",
        "gambar" => "Avengers.jpg"
    ],
    [
        "Judul" => "Iron Man 1",
        "TahunRilis" => "2008",
        "Sutradara" => "John Favreau",
        "PemeranUtama" => "Robert Downer Jr.",
        "gambar" => "IronMan.jpg"
    ],
    [
        "Judul" => "500 Days of Summer",
        "TahunRilis" => "2009",
        "Sutradara" => "Marc Webb",
        "PemeranUtama" => "Joseph Gordon-Levitt",
        "gambar" => "500DaysofSummer.jpg"
    ],
    [
        "Judul" => "The Lord of the Rings: The Fellowship of the Rings",
        "TahunRilis" => "2001",
        "Sutradara" => "Peter Jackson",
        "PemeranUtama" => "Elijah Wood",
        "gambar" => "TheLordoftheRings.jpg"
    ],
    [
        "Judul" => "Harry Potter and the Sorcerer's Stone",
        "TahunRilis" => "2001",
        "Sutradara" => "Chris Columbus",
        "PemeranUtama" => "Daniel Radcliffe",
        "gambar" => "HarryPotter.jpg"
    ],
    [
        "Judul" => "Joker",
        "TahunRilis" => "2019",
        "Sutradara" => "Todd Phillips",
        "PemeranUtama" => "Joaquin Phoenix",
        "gambar" => "Joker.jpg"
    ],
    [
        "Judul" => "Casino Royale",
        "TahunRilis" => "2006",
        "Sutradara" => "Martin Campbell",
        "PemeranUtama" => "Daniel Craig",
        "gambar" => "JamesBond.jpg"
    ],
    [
        "Judul" => "Fight Club",
        "TahunRilis" => "1999",
        "Sutradara" => "David Fincher",
        "PemeranUtama" => "Edward Norton",
        "gambar" => "FightClub.jpg"
    ]
];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>GET</title>
    </head>
    <body>
        <h1>List Film</h1>
        <ul>
            <?php foreach ($ListFilm as $film): ?>
                <li>
                    <a href="latihan2.php?Judul=<?= $film["Judul"];?>&TahunRilis=
                    <?= $film["TahunRilis"];?>&Sutradara=<?= $film["Sutradara"];?>&PemeranUtama=
                    <?= $film["PemeranUtama"];?>&gambar=<?= $film["gambar"];?>"><?= $film["Judul"];?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>