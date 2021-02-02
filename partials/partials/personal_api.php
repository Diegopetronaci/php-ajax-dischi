<?php 
    $dischi = [
        [
           "img" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
           "title" => "New Jersey",
           "author" => "Bon Jovi",
           "year" => "1988"
        ],
        [
           "img" => "img/logo.png",
           "title" => "Titolo",
           "description" => "Descrizione"
        ],
        [
           "img" => "img/logo.png",
           "title" => "Titolo",
           "description" => "Descrizione"
        ],
        [
           "img" => "img/logo.png",
           "title" => "Titolo",
           "description" => "Descrizione"
        ],
        [
           "img" => "img/logo.png",
           "title" => "Titolo",
           "description" => "Descrizione"
        ],
        [
           "img" => "img/logo.png",
           "title" => "Titolo",
           "description" => "Descrizione"
        ],
        [
           "img" => "img/logo.png",
           "title" => "Titolo",
           "description" => "Descrizione"
        ],
        [
           "img" => "img/logo.png",
           "title" => "Titolo",
           "description" => "Descrizione"
        ],
        [
           "img" => "img/logo.png",
           "title" => "Titolo",
           "description" => "Descrizione"
        ],
        [
           "img" => "img/logo.png",
           "title" => "Titolo",
           "description" => "Descrizione"
        ],
    ];

    header("Content-Type: application/json");
    echo json_encode($dischi);
?>