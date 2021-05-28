<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <title>Hello, world!</title>
    </head>

    <body>
        <!-- Sahifani chop etish (view->action) -->
        <div class="container"><?= $content ?></div>

        <!-- Debug bar -->
        <div><?= debug(vendor\core\DB::$count_sql) ?></div>
        <div><?= debug(vendor\core\DB::$quieries) ?></div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
            integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
        </script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>

    </body>

</html>