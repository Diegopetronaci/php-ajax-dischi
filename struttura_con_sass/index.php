<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./dist/css/app.css">
    </head>
    <body>
        <nav>
            <div class="logo_nav">
                <img src="dist/img/logo.png" alt="">
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
        <script src="./dist/js/app.js" charset="utf-8"></script>
    </body>
</html>

<!-- ricordati di avviare npm run watch da terminale se vuoi vedere le modifiche  -->