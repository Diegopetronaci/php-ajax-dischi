<!-- Seconda Milestone:
Attraverso l’utilizzo di AJAX: al caricamento della pagina
ajax chiederà attraverso una chiamata i dischi a
php e li stamperà attraverso VueJS. -->



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <nav>
            <div class="logo_nav">
                <img src="assets/img/logo.png" alt="">
            </div>
        </nav>
        
        <div class="app">
            <div class="container d_flex space_between">
                <div class="contenitore text_center color_white" v-for="disco in dischi">
                    <img :src="disco.img" alt="">
                    <div class="text d_flex_column space_around">
                        <h1> {{disco.title}} </h1>
                        <p> {{disco.author}} </p>
                        <p> {{disco.year}} </p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="assets/main.js" charset="utf-8"></script>
    </body>
</html>