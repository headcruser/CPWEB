<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Cpweb Administration">
        <base href="{$router->generateUri('CPWEB.index')}" >
        <link rel="stylesheet" type="text/css" href="{$smarty.const.CSS}bootstrap/bootstrap.css">
        {block name=styles}<!-- ADDING STYLES  -->{/block}
        <script src="{$smarty.const.JS}jquery.js"></script>
        <script src="{$smarty.const.JS}bootstrap/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" >
        </script>
        {block name=script}<!-- ADDING SCRIPT JS-->{/block}
        {block name=title}<title>CPWEB</title>{/block}
    </head>
    <body>
            {block name=header}{/block}
            {block name=content}{/block}
            {block name=footer}{/block}
    </body>
</html>