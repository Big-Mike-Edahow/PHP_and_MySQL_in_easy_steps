<!-- variable.php -->
<!-- Creating Variables -->

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Variables</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Creating Variables! 🪣</h1>
            <br><br>
            <?php

            # Create and initialize a variable.
            $fahrenheit = 98.6;

            # Display the variable value in a mixed string.
            echo "<p>Body temperature is $fahrenheit degrees Fahrenheit.</p>";

            # Calculate the celsius value.
            $celsius = ($fahrenheit - 32) * 5 / 9;

            # Display the new variable value in a mixed string.
            echo "<p>Body temperature is $celsius degrees Celsius.</p>";

            ?>
        </section>
    </main>
</body>

</html>

