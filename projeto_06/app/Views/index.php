<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index File</title>
    <style>
        html, body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }
    </style>
</head>
<body>
    
    <h1>
        Página 1
    </h1>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae asperiores dolorem delectus deleniti corporis fugit vero eveniet quis at eum!
    </p>

    <?php

        if (empty(!$segments)) {
            echo "<h1>{$segments[0]}</h1>";
        }

    ?>

</body>
</html>