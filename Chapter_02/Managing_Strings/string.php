<!-- string.php -->
<!-- Managing Strings -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Strings</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Managing Strings 🐘</h1>
            <br><br>
            <?php

            # Create and initialize two variables.
            $phrase = 'The truth is rarely pure';
            $author = 'Oscar Wilde';

            # Concatenate two strings.
            $phrase = $phrase . ' and never simple';

            # Display a concatenated string.
            echo "<p> <q>$phrase</q> <cite>—$author</cite> </p>";

            ?>
        </section>
    </main>
</body>

</html>

