<!-- hidden.php -->
<!-- Sending Hidden Data -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Hidden Form Data</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Sending Hidden Data 🕵️</h1>
            <br><br>
            <?php
                date_default_timezone_set('UTC');
                $time = date(' H:i , F j ');
                $user = 'Mike';

                echo '
                <form action="hidden_handler.php" method="POST">
                <fieldset>
                <legend>Send us your comments</legend>
                <textarea rows="5" cols="20" name="comment"></textarea>
                <input type="hidden" name="user" value=" '. $user .' ">
                <input type="hidden" name="time" value=" '. $time.' ">
                </fieldset>
                <p><input type="submit" ></p>
                </form> ';
            ?>
        </section>
    </main>
</body>

</html>

