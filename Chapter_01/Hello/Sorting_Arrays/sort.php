<!-- sort.php -->
<!-- Sorting Arrays -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Sorted Arrays</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Sorting Arrays ↔️</h1>
            <br><br>
            <article>
                <?php
                # Create and initialize an array variable.
                $cars = array('Dodge' => 'Viper', 'Chevrolet' => 'Camaro', 'Ford' => 'Mustang');

                # Display the value of every element.
                echo '<dl><dt>Original Element Order :<dd>';
                foreach ($cars as $key => $value) {
                    echo ' &bull; ', $key . ' ' . $value;
                }
                echo "<br><br>";

                # Display the value of every element.
                asort($cars);
                echo '<dt>Sorted Into Value Order :<dd>';
                foreach ($cars as $key => $value) {
                    echo ' &bull; ', $key . ' ' . $value;
                }
                echo "<br><br>";

                # Display the value of every element.
                ksort($cars);
                echo '<dt>Sorted Into Key Order :<dd>';
                foreach ($cars as $key => $value) {
                    echo ' &bull; ', $key . ' ' . $value;
                }
                echo '</dl>';
                ?>
            </article>
        </section>
    </main>
</body>

</html>

