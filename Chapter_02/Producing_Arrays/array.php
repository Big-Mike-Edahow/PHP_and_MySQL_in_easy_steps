<!-- array.php -->
<!-- Producing Arrays -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" type="text/css" rel="stylesheet">
    <title>PHP Arrays</title>
</head>

<body>
    <main>
        <section class="container">
            <h1 class="headline-h1">PHP and MySQL Producing Arrays 📦</h1>
            <br><br>
		<article>
            <?php

            # Create and initialize an array variable.
            $days = array('Monday', 'Tuesday', 'Wednesday');

            # Display the value in all elements as a bulleted list.
            foreach ($days as $value) {
                echo "&bull; $value ";
            }
            echo "<br><br>";

            # Create and initialize an array variable with keys.
            $months = array('jan' => 'January', 'feb' => 'February', 'mar' => 'March');

            # Display the key and value of each element.
            echo '<dl>';
            foreach ($months as $key => $value) {
                echo "<dt>$key<dd>$value";
            }
            echo '</dl>';

            ?>
</article>
        </section>
    </main>
</body>

</html>

