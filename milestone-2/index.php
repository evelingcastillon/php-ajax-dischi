<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div id="app">

        <header>
            <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/7/71/Spotify.png" alt="">
        </header>

        <main id="site_main">

            <div class="container">
                <div class="song" v-for="song in lista">
                    <img :src="song.poster" alt="">
                    <div class="box_text">
                        <h4 class="title">{{song.title}}</h4>
                        <p class="text">{{song.author}}</p>
                        <p class="text">{{song.year}}</p>
                    </div>
                </div>
            
            </div>
        
        </main>
    </div>
    <!-- vue js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- axios cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- main js -->
    <script src="./assets/js/main.js"></script>
</body>
</html>