<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <?= self::getMeta() ?>
    </head>

    <body>
        <!-- Sahifani chop etish (view->action) -->
        <div class="container">
            <?= $content ?>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
            integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        
        <!-- Sahifaga viewlarda ulangan scriptlarni ulash -->
        <?php
            foreach($scripts as $script){
                echo $script;
            }
        ?>
        
    </body>

</html>