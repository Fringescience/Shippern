<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shippern shipping</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="normalize.css">
        <link rel="stylesheet" type="text/css" href="main.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    </head>
    <body>
        <?php include 'header.php';?>
        <section>
        <form method ="POST" action ="retrieveFromDB.php">
            <p>
                Username:<input type="text" name="username" size="15"/>
            </p>
            <p>
                Password:<input type="text" name="password" size="15"/>
            </p>
            <p>
                <input type="submit" value="Submit"/>
            </p>
        </form>
        </section>
        
        <?php include 'footer.php';?>
    </body>
</html>
