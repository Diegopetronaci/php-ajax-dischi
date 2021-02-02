<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente 
i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

<?php 
    $dischi = [
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
        [
           "img" => "img/logo.png",
           "title" => "Titolo",
           "description" => "Descrizione"
        ],
    ]
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container d_flex">
            <?php foreach ($dischi as $disco => $value) { ?>
                <div class="contenitore">
                    <img src="<?php echo $value['img'];?>" alt="">
                    <h1> <?php echo $value["title"]; ?> </h1>
                    <?php for ($i = 0; $i < count($value["description"]) ; $i++) { ?>
                        <p> <?php echo $value["description"]; ?> </p>
                    <?php } ?> 
                </div>
            <?php } ?>
        </div>
    </body>
</html>