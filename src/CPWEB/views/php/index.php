<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CPWEB</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h1>CONTADORES PUBLICOS WEB</h1>
        <?= $renderer->render('header')  //header ?>

        <li><a href="  <?= $router->generateUri('CPWEB.show', ['slug'=>'holamundo-7aze']);?>">Aticle 1</a></li>
    </body>
</html>

